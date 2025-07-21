<?php

// use Illuminate\Foundation\Application;
// use Illuminate\Foundation\Configuration\Exceptions;
// use Illuminate\Foundation\Configuration\Middleware;

// return Application::configure(basePath: dirname(__DIR__))
//     ->withRouting(
//         web: __DIR__.'/../routes/web.php',
//         api: __DIR__.'/../routes/api.php',
//         commands: __DIR__.'/../routes/console.php',
//         channels: __DIR__.'/../routes/channels.php',
//         health: '/up',
//     )
//     ->withMiddleware(function (Middleware $middleware) {
//         $middleware->api(prepend: [
//             \Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful::class,
//         ]);

//         $middleware->web([
//             \App\Http\Middleware\VerifyCsrfToken::class,
//         ]);

//         $middleware->alias([
//             'verified' => \App\Http\Middleware\EnsureEmailIsVerified::class,
//             'admin.auth.token' => \App\Http\Middleware\AdminAuthToken::class,
//         ]);

//         \App\Http\Middleware\VerifyCsrfToken::except([
//             'stripe/*',
//             'http://localhost:8000/api/admin-login',
//         ]);
//         //
//     })
//     ->withExceptions(function (Exceptions $exceptions) {
//         //
//     })->create();
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        channels: __DIR__.'/../routes/channels.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->api(prepend: [
            \Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful::class,
        ]);

        $middleware->web([
            \App\Http\Middleware\VerifyCsrfToken::class,
        ]);

        $middleware->alias([
            'verified' => \App\Http\Middleware\EnsureEmailIsVerified::class,
            'admin.auth.token' => \App\Http\Middleware\AdminAuthToken::class,
            'profil.auth.token' => \App\Http\Middleware\ProfilAuthToken::class,
            'client.auth.token' => \App\Http\Middleware\ClientAuthToken::class,
        ]);

        // Ensure VerifyCsrfToken is correctly excluded for specific routes
        \App\Http\Middleware\VerifyCsrfToken::except([
            'stripe/*',
            // 'api/admin-login',
            // 'api/artist-login',
            // 'api/client-login',
            // 'api/artist-register',
            // 'api/client-register',
            // 'api/add-visitor-message',
            // 'api/add-category',
            // 'api/categories/{id}',
            // 'api/categories/{id}',
            'api/*',
        ]);

    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();

