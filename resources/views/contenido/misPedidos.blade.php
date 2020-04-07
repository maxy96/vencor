@extends('layouts.app')
@section('title', 'Mis pedidos')
@section('content')
	<div class="container my-4">
		<h1 class="text-center txt-responsive">Mis pedidos realizados</h1>

		<table class="table table-hover table-light shadow">
		  <thead class="thead-bluelight">
		    <tr>
				<th scope="col">Detalles del pedido</th>
				<th scope="col">Fecha pedido</th>
				<th scope="col">Codigo de pedido</th>
				<th scope="col">Factura</th>
				<th scope="col">Pendiente/Recibido</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <td><button class="btn btn-dark accordion-toggle" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Ver detalles </button></td>
		      <td>Mark</td>
		      <td>Mark</td>
		      <td><a class="btn btn-outline-success" href="#">Ver factura</a></td>
		      <td>Pendiente</td>
		    </tr>
		  </tbody>
		  <tbody class="collapse" id="collapseExample[]">
		  	<tr>
		  		<td>hola</td>
		  	</tr>
		  	<tr>
		  		<td>adios</td>
		  	</tr>
		  </tbody>
		  <tbody>
		    <tr>
		      <td><button class="btn btn-dark accordion-toggle" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Ver detalles </button></td>
		      <td>Mark</td>
		      <td>Mark</td>
		      <td><a class="btn btn-outline-success" href="#">Ver factura</a></td>
		      <td>Pendiente</td>
		    </tr>
		  </tbody>
		</table>
	</div>

	<script>
		$('.accordion-toggle').click(function(){
			$('.hidden-row').hide();
			$(this).next('tr').find('.hidden-row').show();
			console.log($('#collapseExample'));
		});
	</script>
@endsection
