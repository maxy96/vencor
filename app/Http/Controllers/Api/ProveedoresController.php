<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Proveedores;

class ProveedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Proveedores::all();                
    }

    public function validator(array $data)
    {
        return Validator::make($data, [
            'empresa'               => ['required'],
            'direccion_empresa'     => ['required'],
            'cuit'                  => ['required', 'numeric'],
            'tel_empresa'           => ['required', 'numeric', 'unique:proveedores'],
            'email_empresa'         => ['required', 'unique:proveedores'],
            'revendedor'            => ['required'],
            'direccion_revendedor'  => ['required'],
            'cuil'                  => ['required', 'numeric'],
            'tel_revendedor'        => ['required', 'numeric', 'unique:proveedores'],
            'email_revendedor'      => ['required', 'unique:proveedores']
        ]);
    }

    public function guardar(array $data)
    {
        return Proveedores::create([
            'empresa'               => $data['empresa'],
            'cuit'                  => $data['cuit'],
            'direccion_empresa'     => $data['direccion_empresa'],
            'tel_empresa'           => $data['tel_empresa'],
            'email_empresa'         => $data['email_empresa'],
            'revendedor'            => $data['revendedor'],
            'cuil'                  => $data['cuil'],
            'direccion_revendedor'  => $data['direccion_revendedor'],
            'tel_revendedor'        => $data['tel_revendedor'],
            'email_revendedor'      => $data['email_revendedor']
        ]);
    }

    public function store(Request $request)
    {
        $this->validator($request->all())->validate();
        $proveedor = $this->guardar($request->all());

        return response($proveedor, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
        //$this->validator($request->all())->validate();

        $proveedor = Proveedores::find($id)->update([
                'empresa'               => $request['empresa'],
                'cuit'                  => $request['cuit'],
                'direccion_empresa'     => $request['direccion_empresa'],
                'tel_empresa'           => $request['tel_empresa'],
                'email_empresa'         => $request['email_empresa'],
                'revendedor'            => $request['revendedor'],
                'cuil'                  => $request['cuil'],
                'direccion_revendedor'  => $request['direccion_revendedor'],
                'tel_revendedor'        => $request['tel_revendedor'],
                'email_revendedor'      => $request['email_revendedor']
            ]);
        return response($proveedor, 201);
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
