<?php

namespace App\Http\Middleware;
use App\Http\Controllers\Auth\LoginController;
use Closure;
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
        $request->cookie();
        cookie();
        return redirect()->action('RootController@create');
    }
}
