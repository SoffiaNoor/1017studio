<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Information; // Make sure to import the Information model


class InformationServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        view()->composer('layouts.header_footer', function ($view) {
            $information = Information::first();
            $view->with('information', $information);
        });
    }
}
