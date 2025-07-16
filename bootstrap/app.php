<?php

// use Illuminate\Support\Facades\Gate;
use App\Http\Middleware\Admin;
use App\Http\Middleware\RoleCheck;
use Illuminate\Foundation\Application;
use App\Http\Middleware\CheckPermission;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
         $middleware->alias([
             'role' => RoleCheck::class,
             'permission' => CheckPermission::class,
             'admin' => Admin::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })
    // Authorization gates should be defined in app/Providers/AuthServiceProvider.php
    ->create();
