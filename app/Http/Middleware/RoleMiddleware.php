<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->user()) {
            if (!$request->user()->isAdmin() && $request->route()->getName() == 'admin') {
                return redirect()->intended(route('dashboard', absolute: false));
            }
        }
        return $next($request);
    }
}
