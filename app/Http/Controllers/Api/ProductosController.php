<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Productos;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str as Str;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    function __construct()
    {
        //$this->middleware('admin');
    }

    public function index()
    {
        return Productos::select('productos.*', 'estados_productos.ep_descripcion', 'tipos_productos.tp_descripcion')
                ->join('estados_productos', 'estadoProducto_id', '=', 'estados_productos.id_estadoProducto')
                ->join('tipos_productos', 'tipoProducto_id', '=', 'tipos_productos.id_tipoProducto')
                ->orderBy('id_producto', 'desc')->get();
    }

    public function validator(array $data)
    {
        return Validator::make($data, [
            'tipoProducto' => ['required', 'integer'],
                  'nombre' => ['required'],
                   'marca' => ['required'],
                   'stock' => ['required', 'integer', 'gt:-1'],
                  'precio' => ['required', 'numeric', 'gt:-0.99'],
                  'imagen' => ['required'] // 'mimes:jpg,jpeg,png,PNG'
        ]);
    }

    public function guardarImagen($imagen)
    {

        $exploded = explode(',', $imagen);

        $decoded = base64_decode($exploded[1]);
        if(Str::contains($exploded[0], 'jpeg')){
            $extension = '.jpg';
        }else{
            $extension = '.png';
        }
        $fileName = Str::random().$extension;
        $path = public_path().'/image/'.$fileName;
        file_put_contents($path, $decoded);

        return $fileName;
    }

    public function store(Request $request)
    {
        $this->validator($request->all())->validate();
        
        $fileName = $this->guardarImagen($request->imagen);

        $producto = Productos::create([
            'tipoProducto_id' => $request->tipoProducto,
            'nombre' => $request->nombre,
            'marca' => $request->marca,
            'stock' => $request->stock,
            'precio' => $request->precio,         
            'slug' => Str::slug($request->nombre),
            'remember_token' => strval(random_int(1000, 9999)),
            'estadoProducto_id' => 1,
            'p_imagen' => $fileName
        ]);

        return response($producto, 201);
    }

    public function update(Request $request, $id)
    {
        if (preg_match("/,/", $request->imagen)) {
            $fileName = $this->guardarImagen($request->imagen);
        }else{
            $fileName = $request->imagen;
        }
        
        $producto = Productos::find($id)->update([
                                'tipoProducto_id' => $request->tipoProducto_id,
                                'nombre' => $request->nombre,
                                'marca' => $request->marca,
                                'stock' => $request->stock,
                                'precio' => $request->precio,
                                'p_imagen' => $fileName
                            ]);

        return response($producto, 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = Productos::find($id);
        if ($producto->estadoProducto_id == 1) {
            $producto->update(['estadoProducto_id' => 2]);
        }else{
            $producto->update(['estadoProducto_id' => 1]);
        }
        return;
    }
}
