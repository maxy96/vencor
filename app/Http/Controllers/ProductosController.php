<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Productos;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str as Str;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $productos = Productos::get();
       return $productos;
    }

    public function formNuevoProducto()//formulario para agregar nuevo producto
    {
        return view('contenido.nuevoProducto');
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
        if($request->file('imagen')){
            $path = Storage::disk('public')->put('image', $request->file('imagen'));
            $path = str_replace('image/', '', $path); 
        }
        $this->create($request->all(), $path);
        return redirect()->route('formulario.nuevoProducto')->with('success_msg', '¡Producto agregado satisfactoriamente!');
    }

    public function validator(array $data)
    {
        return Validator::make($data, [
            'tipoProducto' => ['required', 'integer'],
            'nombre' => ['required'],
            'marca' => ['required'],
            'stock' => ['required', 'integer', 'gt:-1'],
            'precio' => ['required', 'numeric', 'regex:/^-?[0-9]+(?:\.[0-9]{1,2})?$/'],
            'imagen' => ['required', 'mimes:jpg,jpeg,png,PNG']
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(array $data, $path)
    {
        $slug = $data['nombre']." ".Str::random(20);
        return Productos::create([
            'tipoProducto_id' => $data['tipoProducto'],
            'nombre' => $data['nombre'],
            'marca' => $data['marca'],
            'stock' => $data['stock'],
            'precio' => $data['precio'],         
            'slug' => Str::slug($slug),
            'remember_token' => $data['_token'],
            'estadoProducto_id' => 1,
            'p_imagen' => $path
        ]);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

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
