<?php

namespace App\Http\Middleware;
use App\Http\Controllers\Auth\LoginController;
use Closure;
use Illuminate\Support\Facades\Crypt;

class AuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(!empty($email = session("email")))
            return $next($request);
        return redirect()->action('RootController@create');
    }
}
