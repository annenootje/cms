<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Order;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        View::composer('layouts.master', function ($view) {
            $view->with('openOrders', Order::all()->where('status', 'Open'));
        });
    }
}
