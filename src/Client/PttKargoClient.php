<?php

namespace FurkanMeclis\PttKargo\Client;

use FurkanMeclis\PttKargo\Exceptions\AuthenticationException;
use FurkanMeclis\PttKargo\Exceptions\SoapException;
use FurkanMeclis\PttKargo\Exceptions\TimeoutException;
use FurkanMeclis\PttKargo\Middleware\LogMiddleware;
use FurkanMeclis\PttKargo\Middleware\RetryMiddleware;
use SoapClient;
use SoapFault;

class PttKargoClient
{
    /**
     * The SOAP client instance.
     *
     * @var SoapClient|null
     */
    protected ?SoapClient $soapClient = null;

    /**
     * Configuration array.
     *
     * @var array
     */
    protected array $config;

    /**
     * Retry middleware instance.
     *
     * @var RetryMiddleware
     */
    protected RetryMiddleware $retryMiddleware;

    /**
     * Log middleware instance.
     *
     * @var LogMiddleware
     */
    protected LogMiddleware $logMiddleware;

    /**
     * Create a new PttKargoClient instance.
     *
     * @param  array  $config
     */
    public function __construct(array $config)
    {
        $this->config = $config;
        $this->retryMiddleware = new RetryMiddleware();
        $this->logMiddleware = new LogMiddleware();
    }

    /**
     * Get or create SOAP client instance.
     *
     * @return SoapClient
     *
     * @throws SoapException
     */
    protected function getSoapClient(): SoapClient
    {
        if ($this->soapClient === null) {
            try {
                $this->soapClient = new SoapClient(
                    $this->config['wsdl'],
                    $this->getSoapOptions()
                );
            } catch (SoapFault $e) {
                throw new SoapException('Failed to create SOAP client: '.$e->getMessage(), 0, $e);
            }
        }

        return $this->soapClient;
    }

    /**
     * Get SOAP client options.
     *
     * @return array
     */
    protected function getSoapOptions(): array
    {
        $options = [
            'trace' => true,
            'exceptions' => true,
            'connection_timeout' => $this->config['timeout'],
            'features' => SOAP_SINGLE_ELEMENT_ARRAYS,
        ];

        if (! empty($this->config['username']) && ! empty($this->config['password'])) {
            $options['authentication'] = SOAP_AUTHENTICATION_BASIC;
            $options['login'] = $this->config['username'];
            $options['password'] = $this->config['password'];
        }

        return $options;
    }

    /**
     * Call a SOAP method with middleware pipeline.
     *
     * @param  string  $method
     * @param  array  $params
     * @return mixed
     *
     * @throws \FurkanMeclis\PttKargo\Exceptions\PttKargoException
     */
    public function call(string $method, array $params = [])
    {
        $client = $this->getSoapClient();
        $requestXml = null;
        $responseXml = null;

        // Build middleware pipeline: Retry → Log → SOAP
        $soapCall = function () use ($client, $method, $params, &$requestXml, &$responseXml) {
            $result = $this->executeSoapCall($client, $method, $params);

            // Store request/response XML for logging
            if (($this->config['log_enabled'] ?? true) && method_exists($client, '__getLastRequest')) {
                $requestXml = $client->__getLastRequest();
                $responseXml = $client->__getLastResponse();
            }

            return $result;
        };

        $logCall = function () use ($soapCall, $method, $params, &$requestXml, &$responseXml) {
            if ($this->config['log_enabled'] ?? true) {
                return $this->logMiddleware->handle(
                    $soapCall,
                    $method,
                    $params,
                    $requestXml,
                    $responseXml
                );
            }

            return $soapCall();
        };

        $retryCall = function () use ($logCall) {
            return $this->retryMiddleware->handle(
                $logCall,
                $this->config['retry_count'] ?? 3,
                $this->config['retry_delay'] ?? 500
            );
        };

        return $retryCall();
    }

    /**
     * Execute SOAP call.
     *
     * @param  SoapClient  $client
     * @param  string  $method
     * @param  array  $params
     * @return mixed
     *
     * @throws \FurkanMeclis\PttKargo\Exceptions\PttKargoException
     */
    protected function executeSoapCall(SoapClient $client, string $method, array $params)
    {
        try {
            return $client->__soapCall($method, $params);
        } catch (SoapFault $e) {
            $this->handleSoapFault($e);
        }
    }

    /**
     * Handle SOAP fault exceptions.
     *
     * @param  SoapFault  $e
     * @return void
     *
     * @throws \FurkanMeclis\PttKargo\Exceptions\PttKargoException
     */
    protected function handleSoapFault(SoapFault $e): void
    {
        $message = $e->getMessage();
        $code = $e->getCode();

        // Check for authentication errors
        if (str_contains($message, 'authentication') || str_contains($message, '401') || str_contains($message, '403')) {
            throw new AuthenticationException('SOAP authentication failed: '.$message, $code, $e);
        }

        // Check for timeout errors
        if (str_contains($message, 'timeout') || str_contains($message, 'timed out')) {
            throw new TimeoutException('SOAP request timeout: '.$message, $code, $e);
        }

        // Generic SOAP exception
        throw new SoapException('SOAP error: '.$message, $code, $e);
    }

    /**
     * Magic method to call SOAP methods.
     *
     * @param  string  $method
     * @param  array  $arguments
     * @return mixed
     *
     * @throws \FurkanMeclis\PttKargo\Exceptions\PttKargoException
     */
    public function __call(string $method, array $arguments)
    {
        return $this->call($method, $arguments);
    }
}
