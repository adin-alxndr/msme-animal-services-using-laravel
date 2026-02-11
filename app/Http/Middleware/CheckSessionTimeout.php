<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckSessionTimeout
{
    public function handle($request, Closure $next)
    {
        // Check if the user is logged in
        if (Auth::check()) {
            // Check if the session timeout is set and has expired
            if ($request->session()->has('timeout') && now() > $request->session()->get('timeout')) {
                Auth::logout();
                $request->session()->invalidate();
                return redirect('/login-admin');
            }

            // Update the session timeout for the current user
            $request->session()->put('timeout', now()->addMinutes(config('session.lifetime')));
        }

        return $next($request);
    }
}
