<?php

namespace App\Providers;

use App\Enums\OrderStatus;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts.app', function ($view) {
            $view->with([
                'orders' =>   request()->user()?->orders()->where('status', OrderStatus::UNPAID)->count() ?? 0
            ]);
        });

        view()->composer('layouts.admin', function ($view) {
            $view->with([
                'pages' => ['terms-conditions', 'privacy-policy', 'cencellation-policy', 'cookies-policy'],
            ]);
        });

        Paginator::useBootstrap();
    }
}
