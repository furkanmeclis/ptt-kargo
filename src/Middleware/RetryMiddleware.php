<?php

namespace FurkanMeclis\PttKargo\Middleware;

use Closure;
use FurkanMeclis\PttKargo\Exceptions\PttKargoException;

class RetryMiddleware
{
    /**
     * Handle the middleware call.
     *
     * @param  callable  $next
     * @param  int  $retryCount
     * @param  int  $retryDelay
     * @return mixed
     *
     * @throws PttKargoException
     */
    public function handle(callable $next, int $retryCount = 3, int $retryDelay = 500)
    {
        $attempt = 0;
        $lastException = null;

        while ($attempt <= $retryCount) {
            try {
                return $next();
            } catch (PttKargoException $e) {
                $lastException = $e;
                $attempt++;

                if ($attempt > $retryCount) {
                    break;
                }

                // Exponential backoff: 500ms → 1000ms → 2000ms
                $delay = $retryDelay * (2 ** ($attempt - 1));
                usleep($delay * 1000);
            }
        }

        throw $lastException;
    }
}
