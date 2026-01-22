<?php

namespace FurkanMeclis\PttKargo;

use FurkanMeclis\PttKargo\Client\PttKargoClient;
use Illuminate\Support\Facades\Log;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class PttKargoServiceProvider extends PackageServiceProvider
{
    /**
     * Configure the package.
     *
     * @param  Package  $package
     * @return void
     */
    public function configurePackage(Package $package): void
    {
        $package
            ->name('ptt-kargo')
            ->hasConfigFile();
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register(): void
    {
        parent::register();

        $this->app->singleton('ptt-kargo.client', function ($app) {
            $config = config('ptt-kargo', []);

            return new PttKargoClient($config);
        });

        $this->registerLogChannel();
    }

    /**
     * Register custom log channel.
     *
     * @return void
     */
    protected function registerLogChannel(): void
    {
        if (method_exists(Log::getFacadeRoot(), 'channel')) {
            config([
                'logging.channels.ptt-kargo' => [
                    'driver' => 'single',
                    'path' => storage_path('logs/ptt-kargo.log'),
                    'level' => env('LOG_LEVEL', 'debug'),
                ],
            ]);
        }
    }
}
