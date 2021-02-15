<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $role)
    {
        if ($role == 'admin' && auth()->user()->role != 0) {
            abort(code: 403);
        }

        if ($role == 'user' && auth()->user()->role != 1) {
            abort(code: 403);
        }
        return $next($request);
    }
}
