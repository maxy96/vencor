@extends('layouts.app')
@section('title', 'Gestionar proveedor')
@section('content')
	<div id="app">
		<gestionar-proveedores></gestionar-proveedores>
	</div>			
@endsection

@section('scripts')
	<script src="{{asset('js/gestionarProveedores.js')}}"></script>
@endsection
