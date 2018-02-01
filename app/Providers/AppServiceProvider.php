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
        view()->composer('layouts.frontend.front-top', 'App\Http\Composers\PublicComposer');
        view()->composer('frontend.listing.clubs', 'App\Http\Composers\PublicComposer');
        view()->composer('frontend.listing.merchants', 'App\Http\Composers\PublicComposer');
        view()->composer('layouts.frontend.front-bottom', 'App\Http\Composers\BottomComposer');
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
