<?php

return [
    /*
    |--------------------------------------------------------------------------
    | WSDL URL
    |--------------------------------------------------------------------------
    |
    | The WSDL URL for the PTT Kargo SOAP service.
    |
    */
    'wsdl' => env('PTT_KARGO_WSDL', 'https://pttws.ptt.gov.tr/PttBilgi/services/Sorgu?wsdl'),

    /*
    |--------------------------------------------------------------------------
    | Username
    |--------------------------------------------------------------------------
    |
    | The username for SOAP authentication.
    |
    */
    'username' => env('PTT_KARGO_USERNAME', ''),

    /*
    |--------------------------------------------------------------------------
    | Password
    |--------------------------------------------------------------------------
    |
    | The password for SOAP authentication.
    |
    */
    'password' => env('PTT_KARGO_PASSWORD', ''),

    /*
    |--------------------------------------------------------------------------
    | Timeout
    |--------------------------------------------------------------------------
    |
    | Connection timeout in seconds.
    |
    */
    'timeout' => env('PTT_KARGO_TIMEOUT', 30),

    /*
    |--------------------------------------------------------------------------
    | Retry Count
    |--------------------------------------------------------------------------
    |
    | Number of retry attempts for failed requests.
    |
    */
    'retry_count' => env('PTT_KARGO_RETRY_COUNT', 3),

    /*
    |--------------------------------------------------------------------------
    | Retry Delay
    |--------------------------------------------------------------------------
    |
    | Initial retry delay in milliseconds. Will be doubled on each retry.
    |
    */
    'retry_delay' => env('PTT_KARGO_RETRY_DELAY', 500),

    /*
    |--------------------------------------------------------------------------
    | Log Enabled
    |--------------------------------------------------------------------------
    |
    | Enable or disable request/response logging.
    |
    */
    'log_enabled' => env('PTT_KARGO_LOG_ENABLED', true),

    /*
    |--------------------------------------------------------------------------
    | Environment
    |--------------------------------------------------------------------------
    |
    | Environment mode: 'test' or 'prod'
    |
    */
    'environment' => env('PTT_KARGO_ENVIRONMENT', 'test'),
];
