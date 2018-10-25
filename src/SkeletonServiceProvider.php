<?php

namespace SanderVanHooft\Skeleton;

use Illuminate\Support\ServiceProvider;

class SkeletonServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            // $this->publishes([
            //     __DIR__.'/../config/skeleton.php' => config_path('skeleton.php'),
            // ], 'config');

            $this->publishes([
                __DIR__.'/../database/migrations/XXX.php' => database_path('migrations/XXX.php'),
            ], 'migrations');

            // $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

            /*
            $this->loadViewsFrom(__DIR__.'/../resources/views', 'skeleton');

            $this->publishes([
                __DIR__.'/../resources/views' => base_path('resources/views/vendor/skeleton'),
            ], 'views');
            */
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'skeleton');
    }
}
