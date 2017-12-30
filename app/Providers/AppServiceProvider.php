<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('frontendlayouts.front-top', 'App\Http\Composers\PublicComposer');
        view()->composer('listing.clubs', 'App\Http\Composers\PublicComposer');
        view()->composer('listing.merchants', 'App\Http\Composers\PublicComposer');
        view()->composer('frontendlayouts.front-bottom', 'App\Http\Composers\BottomComposer');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
