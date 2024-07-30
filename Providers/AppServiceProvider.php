<?php

namespace App\Providers;

use App\Business\UserBusiness;
use App\DAO\UserDAO;
use App\Services\UserServices;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(UserDAO::class, function ($app) {
            return new UserDAO();
        });

        $this->app->singleton(UserBusiness::class, function ($app) {
            return new UserBusiness($app->make(UserDAO::class));
        });

        $this->app->singleton(UserServices::class, function ($app) {
            return new UserServices($app->make(UserBusiness::class));
    });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        //
    }
}
