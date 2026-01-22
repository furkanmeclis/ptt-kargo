<?php

use FurkanMeclis\PttKargo\Exceptions\PttKargoException;
use FurkanMeclis\PttKargo\Middleware\RetryMiddleware;

it('retries on failure', function () {
    $middleware = new RetryMiddleware();
    $attempts = 0;

    $callable = function () use (&$attempts) {
        $attempts++;

        if ($attempts < 3) {
            throw new PttKargoException('Test exception');
        }

        return 'success';
    };

    $result = $middleware->handle($callable, 3, 100);

    expect($result)->toBe('success');
    expect($attempts)->toBe(3);
});

it('throws exception after max retries', function () {
    $middleware = new RetryMiddleware();

    $callable = function () {
        throw new PttKargoException('Test exception');
    };

    expect(fn () => $middleware->handle($callable, 2, 10))
        ->toThrow(PttKargoException::class);
});
