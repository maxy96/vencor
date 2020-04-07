@extends('layouts.app')
@section('title', 'Gestionar pedidos')
@section('content')
	<div class="container my-4">
		<h1 class="text-center">Gestionar pedidos</h1>
		<div class="justify-content-center bg-white shadow">
			<div class="table-responsive">
			<table class="table table-striped">
				<thead class="thead-dark">
					<tr>
						<th scope="col">ID orden</th>
						<th scope="col">Persona</th>
						<th scope="col">DNI</th>
						<th scope="col">Codigo</th>
						<th scope="col">Telefono</th>
						<th scope="col">Domicilio</th>
						<th scope="col">Total Productos</th>
						<th scope="col">Precio Total</th>
						<th scope="col">Estado</th>
						<th scope="col">Ver</th>
					</tr>
				</thead>
				<tbody>
					@foreach($ordenes as $orden)
					<tr>
						<td scope="row">{{$orden->id_ordenPedido}}</td>
						<td>{{$orden->user()->first()->nombre.' '. $orden->user()->first()->apellido}}</td>
						<td>{{$orden->user()->first()->dni}}</td>
						<td>{{$orden->cod_ordenPedido}}</td>
						@foreach($orden->user()->first()->contactos()->get() as $contacto)
						<td>{{$contacto->telefono}}</td>
						<td>{{$contacto->domicilio}}</td>
						@endforeach
						<td>{{$orden->totalPedidos()}}</td>
						<td>${{$orden->totalPrecio()}}</td>
						<td>{{$orden->tipoPedido_id == 1 ? "pendiente" : "recibido"}}</td>
						<td><a class="btn btn-primary" href="#"><i class="fa fa-eye"></i></a></td>
					</tr>
					@endforeach
				</tbody>
			</table>
			</div>
		</div>
	</div>
@endsection