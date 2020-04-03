@extends('layouts.pdf')
@section('title', 'Detalle de la orden')
@section('content')
	<div class="container-fluid" style="background-color: #ffffffaa;">
		<div class="row justify-content-center">
			<div class="col-md-10 py-2">
				{{--<img style="width: 100px; position:absolute; " src="{{asset('vencor-presentacion.png')}}" alt="">--}}
				<h1 class="text-center"><u>Factura</u></h1>
				<div class="py-2 px-4">
					<h5><strong>Cliente:</strong><i> {{ucfirst($orden->user()->first()->nombre).' '.ucfirst($orden->user()->first()->apellido)}}</i></h5>
					<h5><strong>DNI:</strong><i> {{$orden->user()->first()->dni}}</i></h5>
					<h5><strong>Fecha Orden:</strong><i> {{$orden->fechaPedido}}</i></h5>
				</div>
				<div class="border-dashed border-secondary my-2"></div>
				<h3 class="text-center my-2">Detalle del pedido</h3>
				<table class="table table-sm table-borderless">
				  <thead>
				    <tr>
				      <th scope="col">Cod-Producto</th>
				      <th scope="col">Producto</th>
				      <th scope="col">Precio</th>
				      <th scope="col">Cantidad</th>
					  <th scope="col">Subtotal</th>
				    </tr>
				  </thead>
				  <tbody>
				  	{{$cantidad = 0}}
				  	{{$precio = 0.00}}
				  	
					@foreach($orden->detallesPedidos()->get() as $producto)
					<tr>
						<th scope="row">{{$producto->productos()->first()->id_producto}}</th>
						<td>{{$producto->productos()->first()->nombre}}</td>
						<td>${{$producto->productos()->first()->precio}}</td>
						<td>{{$producto->d_cantidad}}</td>
						<td>${{$producto->d_precio}}</td>
						{{$cantidad += $producto->d_cantidad}}
						{{$precio += $producto->d_precio}}
					</tr>
					@endforeach
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<th>Cantidad total:</th>
						<th>{{$cantidad}}</th>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<th>Precio total:</th>
						<th>${{$precio}}</th>
					</tr>
				  </tbody>
				</table>
				<div class="border-dashed border-secondary"></div>
				<div class="justify-content-center my-4">
					<h2 class="text-center">Codigo de Orden</h2>
					<h4 class="text-center">{{$orden->cod_ordenPedido}}</h4>
					<h6 class="text-center"><strong>Indique este codigo al momento de recibir el producto</strong></h6>
				</div>
			</div>
		</div>
	</div>
@endsection