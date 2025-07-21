<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Profil;

class ProfilAuthToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $token = $request->header('Authorization');

        if (!$token) {
            return response()->json(['error' => 'Token not provided'], 401);
        }

        $token = str_replace('Bearer ', '', $token);
        $profil = Profil::where('api_token', $token)->first();

        if (!$profil) {
            return response()->json(['error' => 'Invalid token'], 401);
        }

        $request->profil = $profil;
        return $next($request);
    }
}
