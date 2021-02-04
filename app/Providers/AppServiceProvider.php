<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Payjp\Payjp;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Payjp::setApiKey(config('payjp.secret_key'));
        Schema::defaultStringLength(191);
        if (\App::environment('production')) {
            \URL::forceScheme('https');
        }
    }
}
