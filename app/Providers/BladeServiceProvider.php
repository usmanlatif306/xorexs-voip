<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class BladeServiceProvider extends ServiceProvider
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
        // admin
        Blade::if('admin', function () {
            return request()->user()->isAdmin();
        });

        // user
        Blade::if('user', function () {
            return request()->user()->isUser();
        });
    }
}
