<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\MyCustomService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Register your custom service
        $this->app->singleton(MyCustomService::class, function ($app) {
            return new MyCustomService();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Define your application's bootstrapping tasks here
        // For example, you can define some view composers or global middleware here.
    }
}

