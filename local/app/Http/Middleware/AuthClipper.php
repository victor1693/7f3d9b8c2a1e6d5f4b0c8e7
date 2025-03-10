<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect; 
class AuthClipper
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    
    public function handle(Request $request, Closure $next): Response
    {
    	if (!Session::has('user_id') || empty(Session::get('user_id'))) {
            return Redirect('/'); // Redirige a signIn si no hay sesión
        }
        return $next($request);
    }
}
