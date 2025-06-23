<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->trustProxies(at: '*');
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();

    // ambil storage path dari env, fallback ke default
    $storagePath = env('APP_STORAGE_PATH', realpath(__DIR__ . '/../storage'));

    // pastikan direktori framework/views ada (Laravel biasanya auto‐create,
    // tapi kita guard supaya tidak error)
    if (! file_exists($storagePath . '/framework/views')) {
        mkdir($storagePath . '/framework/views', 0755, true);
    }

    // override storage path Laravel
    $app->useStoragePath($storagePath);

    return $app;
