<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LoginStateCheckForSessionPage
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
        if ($request->session()->get('id')) {
            return redirect(route('user.show', $request->session()->get('id')));
        }
        return $next($request);
    }
}
