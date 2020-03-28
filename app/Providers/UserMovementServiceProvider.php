<?php

namespace App\Providers;

use App\DataCenter\UserMovement;
use App\Observer\UserMovementObserver;
use Illuminate\Support\ServiceProvider;

class UserMovementServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        UserMovement::observe(UserMovementObserver::class);
    }
}
