<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Roles
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $Roles)
    {
        if($user = Auth::user()) {
            if ($user->role == 'admin') {
                return redirect()->intended('admin');
            }elseif ($user->role == 'customer') {
                return redirect()->intended('dashboard');
            }elseif ($user->role == 'pemilik_kost') {
                return redirect()->intended('pemilik_kost');
            }
        }
        return $next($request);
    }
}
