<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\OrdenPedidos;
use App\Models\DetallesPedidos;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use MP;

use Illuminate\Support\Str as Str;

class OrdenController extends Controller
{
	public function index(){

		foreach (\Cart::session(\Auth::user()->id_user)->getContent() as $cart){
			$items[] = array_merge([ //concatenar array -> Array add(array)
						   'id' => $cart->id,
						    //'category_id' => 'phones',
						    'title' => $cart->name,
						    'description' => "",
						    'picture_url' => asset("image/".$cart->attributes->image),
						    'quantity' => $cart->quantity,
						    'currency_id' => 'ARS',
						    'unit_price' => $cart->price      
        		  	 ]);  						
		}
		
		$preferenceData = ['items' => $items];
		//dd($preferenceData);
		$preference = MP::create_preference($preferenceData);
    	//$preference->back_urls = ['success' => 'hola'];
    	$preference['response']['back_urls'] = [ 'failure' => route('cart.index')];
   		$a = $preference['response']['id'];
		return view('contenido.orden', compact('a'));
	}
	public function factura($cod_orden)
	{
		$orden = OrdenPedidos::where('cod_ordenPedido','=',$cod_orden)->first();
		$pdf = app('dompdf.wrapper');
		$pdf->loadView('contenido.factura', compact('orden'));
		return $pdf->stream();
	}
	public function formOrden()
	{
		return view();
	}

	public function compraEfectivo()
	{
		$cod_orden =  Str::random(8);
		$idOrden = DB::table('orden_pedidos')->insertGetId([
				'cliente_id' => \Auth::user()->id_user,
				'fechaPedido' => now(),
				'cod_ordenPedido' => $cod_orden,
				'tipoPedido_id' => 1,    //1 - Pendiente
		]);
		$this->cargarDetallesPedido($idOrden);
		\Cart::session(\Auth::user()->id_user)->clear();
        return redirect()->route('compra.finalizada')->with(['codigo' => $cod_orden]);
	}

	public function cargarDetallesPedido($idOrden)
	 {
	 	foreach (\Cart::session(\Auth::user()->id_user)->getContent() as $cart) 
	 	{
      		DetallesPedidos::create([
      			'orden_id' 	=> $idOrden, 
				'producto_id' => $cart->id,
				'd_cantidad'	=> $cart->quantity, 
				'd_precio'	 	=> \Cart::session(Auth::user()->id_user)->get($cart->id)->getPriceSum()
      		]);
      	}
	 }
	 public function compraFinalizada()
	  {
	  	return view('contenido.compraFinalizada');
	  } 
}
