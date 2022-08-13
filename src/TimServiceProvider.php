<?php

declare(strict_types=1);

namespace Chenjiacheng\LaravelTim;

use Chenjiacheng\Tim\Tim;
use Illuminate\Support\ServiceProvider;

class TimServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Tim::class, function ($app) {
            return new Tim($app['config']['tim']);
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/tim.php' => config_path('tim.php')
        ], 'config');
    }
}