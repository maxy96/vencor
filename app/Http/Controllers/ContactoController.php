<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Contactos;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str as Str;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contenido.agregarContacto');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(array $data, $user)
    {
        return Contactos::create([
            'telefono' => $data['telefono'],
            'domicilio' => strtolower($data['domicilio'])." ".$data['altura'],
            'casa_descripcion' => $data['casa_descripcion'],
            'user_id' => $user,
            'remember_token' => $data['_token']
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
        $this->create($request->all(), $request->user()->id_user);
        return redirect()->route('cart.index')->with('success_msg', 'Contacto registrado, puede ordenar su pedido');
    }

    public function validator(array $data)
    {
        return Validator::make($data, [
            'telefono' => ['required', 'regex:/(379)([4-5]{1})([0-9]{6})/'],
            'domicilio' => ['required', 'regex:/^[a-zA-Z\s]+$/'],
            'altura' => ['required', 'regex:/[0-9]{2,4}/'],
            'casa_descripcion' => ['required']
        ]);
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
