<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EditCheck
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
        if ($request->session()->get('id') != $request->route()->parameter('user')) {
            return redirect(route('top'))->with('alert', '編集権限が有りません');
        }
        return $next($request);
    }
}
