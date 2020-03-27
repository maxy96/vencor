<?php

namespace App\Http\Controllers;
use App\Models\Productos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\PaymentMethods\MercadoPago;

class CartController extends Controller
{
     public function shop()
    {
        $productos = Productos::all();
        return dd($productos);
        //return view('shop')->withTitle('E-COMMERCE STORE | SHOP')->with(['products' => $products]);
    }
    public function cart()  
    {
        $cartCollection = \Cart::getContent();
        return view('contenido.cart')->withTitle('E-COMMERCE STORE | CART')->with(['cartCollection' => $cartCollection]);
    }
    public function add(Request $request)
    {
        \Cart::add(array(
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => array(
            	'image' => $request->img,
                'slug' => $request->slug,
                'type_product' => $request->tipoProducto_id 
            )
        ));
        return redirect()->route('cart.index')->with('success_msg', '¡El producto se agregó al carrito!');
    }

    public function remove(Request $request)
    {
        \Cart::remove($request->id);
        return redirect()->route('cart.index')->with('success_msg', '¡Producto removido!');
    }

    public function update(Request $request){
    	$this->validator($request->all())->validate();
        \Cart::update($request->id,
            array(
                'quantity' => array(
                    'relative' => false,
                    'value' => $request->quantity
                ),
        ));
        return redirect()->route('cart.index')->with('success_msg', '¡El carrito se ha actualizado!');
    }

    public function clear(){
        \Cart::clear();
        return redirect()->route('cart.index')->with('success_msg', '¡El carrito está despejado!');
    }
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'quantity' =>['gt: 0','integer']
        ]);
    }
}
