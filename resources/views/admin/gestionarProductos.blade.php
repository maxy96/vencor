@extends('layouts.app')
@section('title', 'Gestionar Productos')

@section('content')
	<div id="app" class="container my-4">
		@{{productos}}
		<h1 class="text-center my-4">Gestionar Productos</h1>
		<div class="my-4">
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formulario" data-whatever="">Agregar Productos</button>
			@include('admin.modalFormAgregarProducto')
		</div>
		<div class="justify-content-center shadow bg-white my-4">
			
			<div class="table-responsive">
				<table class="table table-striped ">
				<thead class="thead-dark">
					<tr>
						<th scope="col">ID Producto</th>
						<th scope="col">Imagen</th>
						<th scope="col">Producto</th>
						<th scope="col">Marca</th>
						<th scope="col">Precio</th>
						<th scope="col">Stock</th>
						<th scope="col">Accion</th>
					</tr>
				</thead>
				<tbody>
					@foreach($productos as $producto)
					<tr>
						<td scope="row">{{$producto->id_producto}}</td>
						<td><img src="{{asset("image/$producto->p_imagen")}}" alt="" style="width: 100px;height: 100px;"></td>
						<td>{{$producto->nombre}}</td>
						<td>{{$producto->marca}}</td>
						<td>{{$producto->precio}}</td>
						<td>{{$producto->stock}}</td>
						<td><a class="btn btn-success" href="#">Modificar</a></td>
					</tr>
					@endforeach
				</tbody>
			</table>
			</div>		
		</div>
		
	</div>
@endsection
@section('script')
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.18/vue.js"></script>
	<script src="{{ asset('js/agregarProductos.js') }}"></script>
@endsection