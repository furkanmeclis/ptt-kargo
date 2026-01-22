<?php

namespace FurkanMeclis\PttKargo\Tests;

use FurkanMeclis\PttKargo\PttKargoServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

abstract class TestCase extends OrchestraTestCase
{
    /**
     * Get package providers.
     *
     * @param  \Illuminate\Foundation\Application  $app
     * @return array<int, class-string<\Illuminate\Support\ServiceProvider>>
     */
    protected function getPackageProviders($app)
    {
        return [
            PttKargoServiceProvider::class,
        ];
    }

    /**
     * Define environment setup.
     *
     * @param  \Illuminate\Foundation\Application  $app
     * @return void
     */
    protected function defineEnvironment($app)
    {
        $app['config']->set('ptt-kargo.wsdl', 'https://pttws.ptt.gov.tr/PttBilgi/services/Sorgu?wsdl');
        $app['config']->set('ptt-kargo.username', 'test');
        $app['config']->set('ptt-kargo.password', 'test');
        $app['config']->set('ptt-kargo.log_enabled', false);
    }
}
