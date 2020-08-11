<?php

namespace App\Providers;

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
        $this->app->bind(
            \App\Repositories\UserRepository\UserRepositoryInterface::class,
            \App\Repositories\UserRepository\UserRepositoryClass::class
        );

        $this->app->bind(
            \App\Repositories\UserRepository\DiaryRepositoryInterface::class,
            \App\Repositories\UserRepository\DiaryRepositoryClass::class
        );
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
