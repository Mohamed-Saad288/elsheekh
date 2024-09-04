<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class NavServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton('nav', function ($app) {
            return include base_path('data/nav.php');
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
