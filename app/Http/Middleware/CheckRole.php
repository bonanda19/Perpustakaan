<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $level)
    {
        if (!Auth::check()) {
            // Jika pengguna tidak login, arahkan ke halaman login
            return redirect('login');
        }

        $user = Auth::user();
        if ($user->level !== $level) {
            // Jika pengguna tidak memiliki peran yang sesuai, arahkan ke halaman tidak diizinkan
            return redirect('/unauthorized');
        }

        return $next($request);
    }
}
