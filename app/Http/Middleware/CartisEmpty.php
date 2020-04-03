<?php

namespace App\Http\Middleware;

use Closure;
use App\Providers\RouteServiceProvider;

class CartisEmpty
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
        if (\Cart::session($request->user()->id_user)->isEmpty()) {
            return redirect(RouteServiceProvider::CARTCONTENT)->with('alert_msg', '¡No puedes ordenar teniendo un carrito vacio!');
        }
        return $next($request);
    }
}
