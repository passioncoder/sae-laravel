<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Request;

class Auth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->guest()) {

            // abort(401);
            // throw new AuthenticationException();
            return redirect()->route('auth.getLogin')->with('info', 'Dude, you must login!');
        }

        return $next($request);
    }
}
