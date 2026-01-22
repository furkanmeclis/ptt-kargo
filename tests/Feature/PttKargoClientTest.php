<?php

use FurkanMeclis\PttKargo\Client\PttKargoClient;
use FurkanMeclis\PttKargo\Exceptions\SoapException;

it('can instantiate the client', function () {
    $config = [
        'wsdl' => 'https://pttws.ptt.gov.tr/PttBilgi/services/Sorgu?wsdl',
        'username' => 'test',
        'password' => 'test',
        'timeout' => 30,
        'retry_count' => 3,
        'retry_delay' => 500,
        'log_enabled' => false,
    ];

    $client = new PttKargoClient($config);

    expect($client)->toBeInstanceOf(PttKargoClient::class);
});

it('throws exception for invalid wsdl', function () {
    $config = [
        'wsdl' => 'https://invalid-url.example.com/wsdl',
        'timeout' => 5,
        'retry_count' => 1,
        'retry_delay' => 100,
        'log_enabled' => false,
    ];

    $client = new PttKargoClient($config);

    expect(fn () => $client->call('testMethod'))
        ->toThrow(SoapException::class);
})->skip('Requires actual WSDL connection');
