<?php

namespace App\Http\Middleware;

use Closure;
use App\Providers\RouteServiceProvider;

class AdminVerify
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

        if($request->user() == null || !$request->user()->perfil_id == 1){
            return redirect(RouteServiceProvider::ACCESSDENIED);
        }
        return $next($request);
    }
}
