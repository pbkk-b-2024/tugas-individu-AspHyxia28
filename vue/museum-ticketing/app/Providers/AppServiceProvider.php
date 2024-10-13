<?php

namespace App\Providers;

<<<<<<< HEAD
use Illuminate\Support\Facades\Vite;
=======
>>>>>>> d0a2a32e5317c103ff48b2c0b55f18682d8832ef
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
<<<<<<< HEAD
        Vite::prefetch(concurrency: 3);
=======
        //
>>>>>>> d0a2a32e5317c103ff48b2c0b55f18682d8832ef
    }
}
