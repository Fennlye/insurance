<?php

use App\Http\Middleware\jager;
use App\Http\Middleware\Replace;
use App\Http\Middleware\SetLanguage;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->append(Replace::class);
        $middleware->web(append: [
            SetLanguage::class,
        ]);
        $middleware->api(prepend: [
            EnsureFrontendRequestsAreStateful::class,
        ]);
        $middleware->alias([
            'jager' => jager::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
