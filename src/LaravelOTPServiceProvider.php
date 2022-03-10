<?php

namespace GlobalSmartOTP\LaravelOTP;

use Illuminate\Support\ServiceProvider;

class LaravelOTPServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/laravel-otp.php', 'laravel-otp');

        // Register the service the package provides.
        $this->app->singleton('laravel-otp', function ($app) {
            return new LaravelOTP;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides(): array
    {
        return ['laravel-otp'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole(): void
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__ . '/../config/laravel-otp.php' => config_path('laravel-otp.php'),
        ], 'laravel-otp.config');
    }
}
