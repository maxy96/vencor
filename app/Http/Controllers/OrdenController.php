<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Auth;

class OrdenController extends Controller
{
	public function index()
	{
		$carrito = \Cart::getContent();
		$user = Auth::user();
		$pdf = app('dompdf.wrapper');
		$pdf->loadView('contenido.ordenFactura', compact('user', 'carrito'));
		return $pdf->stream();
	}
}
