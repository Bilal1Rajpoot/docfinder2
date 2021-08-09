<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminAlreadyLoggedIn
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
        if(session()->has('LoggedAdmin') && ((url('admin/login')) == $request->url()))
        {
            return back();
        }
        return $next($request);
    }
}
