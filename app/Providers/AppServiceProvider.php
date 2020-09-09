<?php

namespace App\Providers;


use App\Http\Services\Concert\ConcertService;
use Illuminate\Support\ServiceProvider;
use Faker\Generator as Faker;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('Faker', function ($app) {
            return new Faker();
        });

        $this->app->bind('ConcertService', function ($app) {
            return new ConcertService();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
