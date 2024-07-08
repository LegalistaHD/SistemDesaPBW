<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class checkProfil
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
     public function handle(Request $request, Closure $next)
    {
        $user = $request->user();
        if (!$user->profil) {
            // Simpan URL halaman sebelumnya dalam session
            $request->session()->put('url.intended', $request->fullUrl());
            return redirect('/profile');
        }

        return $next($request);
    }
}
