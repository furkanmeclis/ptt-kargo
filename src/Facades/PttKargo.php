<?php

namespace FurkanMeclis\PttKargo\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static mixed call(string $method, array $params = [])
 * @method static mixed __call(string $method, array $arguments)
 *
 * @see \FurkanMeclis\PttKargo\Client\PttKargoClient
 */
class PttKargo extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'ptt-kargo.client';
    }
}
