<?php

namespace FurkanMeclis\PttKargo\Middleware;

use Closure;
use Illuminate\Support\Facades\Log;

class LogMiddleware
{
    /**
     * Handle the middleware call.
     *
     * @param  callable  $next
     * @param  string  $method
     * @param  array  $params
     * @param  string|null  $requestXml
     * @param  string|null  $responseXml
     * @return mixed
     */
    public function handle(callable $next, string $method, array $params = [], ?string $requestXml = null, ?string $responseXml = null)
    {
        $startTime = microtime(true);

        try {
            $response = $next();

            $duration = (microtime(true) - $startTime) * 1000;

            $this->logRequest($method, $params, $response, $duration, $requestXml, $responseXml);

            return $response;
        } catch (\Exception $e) {
            $duration = (microtime(true) - $startTime) * 1000;

            $this->logError($method, $params, $e, $duration, $requestXml);

            throw $e;
        }
    }

    /**
     * Log successful request.
     *
     * @param  string  $method
     * @param  array  $params
     * @param  mixed  $response
     * @param  float  $duration
     * @param  string|null  $requestXml
     * @param  string|null  $responseXml
     * @return void
     */
    public function logRequest(string $method, array $params, $response, float $duration, ?string $requestXml = null, ?string $responseXml = null): void
    {
        $logData = [
            'method' => $method,
            'params' => $this->serializeParams($params),
            'response' => $this->serializeResponse($response),
            'duration_ms' => round($duration, 2),
        ];

        if ($requestXml !== null) {
            $logData['request_xml'] = $requestXml;
        }

        if ($responseXml !== null) {
            $logData['response_xml'] = $responseXml;
        }

        Log::channel('ptt-kargo')->info('PTT Kargo Request', $logData);
    }

    /**
     * Log error request.
     *
     * @param  string  $method
     * @param  array  $params
     * @param  \Exception  $exception
     * @param  float  $duration
     * @param  string|null  $requestXml
     * @return void
     */
    protected function logError(string $method, array $params, \Exception $exception, float $duration, ?string $requestXml = null): void
    {
        $logData = [
            'method' => $method,
            'params' => $this->serializeParams($params),
            'error' => $exception->getMessage(),
            'duration_ms' => round($duration, 2),
        ];

        if ($requestXml !== null) {
            $logData['request_xml'] = $requestXml;
        }

        Log::channel('ptt-kargo')->error('PTT Kargo Error', $logData);
    }

    /**
     * Serialize parameters for logging.
     *
     * @param  array  $params
     * @return array
     */
    protected function serializeParams(array $params): array
    {
        return array_map(function ($param) {
            if (is_object($param)) {
                return get_class($param);
            }

            return $param;
        }, $params);
    }

    /**
     * Serialize response for logging.
     *
     * @param  mixed  $response
     * @return string
     */
    protected function serializeResponse($response): string
    {
        if (is_object($response)) {
            return get_class($response);
        }

        return gettype($response);
    }
}
