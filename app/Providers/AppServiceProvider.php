<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;

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
        Blade::if('role', function ($role) {
            return Auth::check() && Auth::user()->hasRole($role);
        });
      
        Blade::if('admin', function () {
            return Auth::check() && Auth::user()->hasRole('admin');
        });
      
        Blade::component('button', \App\View\Components\Button::class);
    }
}
