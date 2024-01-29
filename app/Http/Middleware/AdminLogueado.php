<?php

namespace App\Http\Middleware;

use App\Http\Controllers\Backend\AdminController;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminLogueado
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */
    public function handle(Request $request, Closure $next, int $necesitaLogin = 0): Response
    {
        if ($necesitaLogin) {
            if (auth()->check()) return $next($request);
            return redirect()->action([AdminController::class, 'login']);
        }

        if (!auth()->check()) return $next($request);
        return redirect()->action([AdminController::class, 'home']);
    }
}
