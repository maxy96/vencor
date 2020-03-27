@extends('layouts.app')
@section('title', 'Productos')
@section('content')
	<div class="container my-4">
		<div class="row">
			@foreach($productos as $producto)
			<article class="col-md-3">
				<div class="card shadow" >
			  		<img class="card-img-top" src="{{ asset("image/$producto->p_imagen") }}" alt="Card image cap" >
			  		<h5 class="card-header">{{$producto->nombre}}</h5>
			 	 	<div class="card-body">
			   			 <p class="card-text">Marca: {{$producto->marca}}</p>
			   			 <p class="card-text">Stock: {{$producto->stock}}</p>
			 		</div>
			 		<div class="card-footer ">
				    	<span class="card-link">{{$producto->precio}}</span>
	    				<a href="#" class="card-link">Ver mas</a>
	    				@auth
		    				<form action="{{ route('cart.store') }}" method="POST">
	               			 {{ csrf_field() }}
	                			<input type="hidden" value="{{ $producto->id_producto }}" id="id" name="id">
	                			<input type="hidden" value="{{ $producto->nombre }}" id="name" name="name" readonly="readonly">
	                			<input type="hidden" value="{{ $producto->precio }}" id="price" name="price" readonly="readonly">
	                			<input type="hidden" value="{{ $producto->p_imagen }}" id="img" name="img">
	                			<input type="hidden" value="{{ $producto->slug }}" id="slug" name="slug">
	                			<input type="hidden" value="{{ $producto->tipoProducto_id }}" id="tipo_id" name="tipo_id">
	                			<input type="hidden" value="1" id="quantity" name="quantity">
	               				<button class="btn btn-secondary btn-sm" class="tooltip-test" title="	add to cart">
	                   				<i class="fa fa-shopping-cart"></i>Agregar al Carrito
	                			</button>
	            			</form>
            			@endauth
			  		</div>
				</div>		
			</article>
			@endforeach

		</div>
	</div>
@endsection
