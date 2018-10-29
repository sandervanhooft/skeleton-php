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
        // $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'skeleton');

        if ($this->app->runningInConsole()) {
            // Publish config command
            // $this->publishes([
            //     __DIR__.'/../config/skeleton.php' => config_path('skeleton.php'),
            // ], 'config');

            // Publish migrations command
            // $this->publishes([
            //     __DIR__.'/../database/migrations/XXX.php' => database_path('migrations/XXX.php'),
            // ], 'migrations');

            // Publish views command
            // $this->publishes([
            //     __DIR__.'/../resources/views' => base_path('resources/views/vendor/skeleton'),
            // ], 'views');
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
