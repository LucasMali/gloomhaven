<?php

namespace App\Providers;

use App\Contracts\World\WorldServiceInterface;
use App\Service\World\WorldService;
use Illuminate\Support\ServiceProvider;

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
        $this->app->bind(
            WorldServiceInterface::class,
            WorldService::class
        );
    }
}
