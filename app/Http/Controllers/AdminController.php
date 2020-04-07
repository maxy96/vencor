<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;
use App\Models\OrdenPedidos;

class AdminController extends Controller
{
	public function __construct()
    {
        $this->middleware('admin');
    }

    public function gestionarProductos()
    {
   		$productos = Productos::orderBy('id_producto', 'DESC')->get();
   		return view('admin.gestionarProductos', compact('productos'));

    }  

    public function gestionarPedidos()
      {
      	$ordenes = OrdenPedidos::all();
      	return view('admin.gestionarPedidos', compact('ordenes'));
      }  
}
