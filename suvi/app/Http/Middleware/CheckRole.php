<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next, $role1, $role2)
    {
        if (auth()->check()) {
            $userRole = auth()->user()->role_id;
            if ($userRole == $role1 || $userRole == $role2) {
                return $next($request);
            }
        }

        return abort(403); // Ganti ini dengan rute yang sesuai jika pengguna tidak memiliki izin.
    }
}
