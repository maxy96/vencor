@extends('layouts.app')
@section('title', 'Gestionar Productos')

@section('content')
	<div id="app">
		<gestion-productos></gestion-productos>
	</div>			
@endsection

@section('scripts')
	<script src="{{asset('js/gestionarProductos.js')}}"></script>
@endsection
