<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\OwnerMiddleware;
use App\Http\Middleware\ClientMiddleware;
use Illuminate\Support\Facades\Route;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',

        then: function(){
            Route::middleware(['web','admin','auth','verified'])->prefix('admin')->name('admin.')->group(base_path('routes/admin.php'));
            Route::middleware(['web','owner','auth','verified'])->prefix('owner')->name('owner.')->group(base_path('routes/owner.php'));
            Route::middleware(['web','client','auth','verified'])->prefix('client')->name('client.')->group(base_path('routes/client.php'));
        }
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
        $middleware->alias([
            'admin'=>AdminMiddleware::class,
            'owner'=>OwnerMiddleware::class,
            'client'=>ClientMiddleware::class,
        ]); 
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
