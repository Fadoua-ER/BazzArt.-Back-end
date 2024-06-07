<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        //
        'stripe/*',
        'api/*',
        // 'api/admin-login',
        // 'api/artist-login',
        // 'api/client-login',
        // 'api/artist-register',
        // 'api/client-register',
        // 'api/add-visitor-message',
    ];
}
