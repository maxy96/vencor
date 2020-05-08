<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;
use App\Models\OrdenPedidos;
use App\Models\User;

class AdminController extends Controller
{
	public function __construct()
    {
        $this->middleware('admin');
    }

    public function gestionarProductos()
    {
   		
   		return view('admin.gestionarProductos');

    }  

    public function gestionarPedidos()
    {
     	$ordenes = OrdenPedidos::all();
    	return view('admin.gestionarPedidos', compact('ordenes'));
    }  

    public function gestionarUsuarios()
    {
      $usuarios = User::where('perfil_id', '=', '1')->get();
      return view('admin.gestionarUsuarios');
    }

    public function pagos()
    {
      return view('admin.pagos');
    }
}
