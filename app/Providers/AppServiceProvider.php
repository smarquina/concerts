<?php

namespace App\Providers;


use App\Http\Enums\FlashStatus;
use App\Http\Services\Concert\ConcertService;
use Illuminate\Support\ServiceProvider;
use Faker\Generator as Faker;

class AppServiceProvider extends ServiceProvider {
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() {
        $this->app->singleton('Faker', function ($app) {
            return new Faker();
        });

        $this->app->bind('ConcertService', function ($app) {
            return new ConcertService();
        });

        $this->app->bind('flashStatus', function () {
            return new FlashStatus();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() {
        //
    }
}
