<?php

namespace GlobalSmartOTP\LaravelOTP\Facades;

use Illuminate\Support\Facades\Facade;

class LaravelOTP extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'laravel-otp';
    }
}
