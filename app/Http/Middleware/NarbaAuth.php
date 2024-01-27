<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NarbaAuth
{
    public function handle(Request $request, Closure $next)
    {
        if(!Auth::guard('admin')->check()){
            if (!$request->expectsJson()) {
                return route('narba-login-page'); // Redirect to your admin login page
            }
        }

        return $next($request);
    }
}
