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

        $this->app->alias(Tim::class, 'tim');
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $source = realpath(__DIR__ . '/../config/tim.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([$source => config_path('tim.php')], 'laravel-tim');
        }

        $this->mergeConfigFrom($source, 'tim');
    }
}