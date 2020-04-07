<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TiposProductos;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str as Str;

class TiposProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(array $data)
    {
        return TiposProductos::create([
            'tp_descripcion' => $data['descripcion'],
            'slug' => str::slug($data['descripcion'])
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validator($request->all())->validate();
        $this->create($request->all());
        
        return redirect()->route('formulario.nuevoProducto')->with('success_msg', '¡Tipo de Producto agregado satisfactoriamente!');
    }

    public function validator(array $data)
    {
        return Validator::make($data, [
            'descripcion' => ['required']
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
       $productos = TiposProductos::where('tipos_productos.slug', '=',$slug)
                    ->join('productos', 'tipoProducto_id', '=', 'id_tipoProducto')
                    ->select('productos.*')
                    ->get();
       return view('contenido.productos', compact('productos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
