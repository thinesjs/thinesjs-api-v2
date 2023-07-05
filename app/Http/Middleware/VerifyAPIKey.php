<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VerifyAPIKey
{
    const AUTH_HEADER = 'x-api-key';
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->header(self::AUTH_HEADER) != config('app.api_key')) {
            throw new AuthenticationException('Unauthenticated');
        } 
    
        return $next($request);
    }
}
