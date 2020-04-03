<?php

namespace App\Http\Middleware;

use Closure;
use App\Providers\RouteServiceProvider;

class ContactVerify
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
        if (empty($request->user()->contactos()->first())) {
            return redirect(RouteServiceProvider::NUEVOCONTACTO)->with('alert_msg', '¡Es necesario tener informacion para contactarse con usted!');
        }
        return $next($request);
    }
}
