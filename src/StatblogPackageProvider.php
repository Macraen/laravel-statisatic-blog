<?php

namespace Macraen\Statblog;

use Illuminate\Support\ServiceProvider;

class StatblogPackageProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->loadViewsFrom(__DIR__.'/views', 'statblog');
        $this->publishes([
           __DIR__.'/views' => base_path('resources/views/macraen/statblog/views')
        ]);
    }
}
