<?php

declare(strict_types=1);

namespace Chenjiacheng\LaravelTim\Facades;

use Illuminate\Support\Facades\Facade;

class Tim extends Facade
{
    /**
     * Return the facade accessor.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'tim';
    }
}