@extends('layouts.app')
@section('title', 'Ordenando producto')
@section('content')

	<div class="container  my-4">
		<div class="row justify-content-center">
			<div class="col-md-10 bg-white shadow py-4 px-4">
				{{--dd(Auth::user()->contactos)--}}		
				<h1 class="text-center text-orange"><strong>Seccion de pago</strong></h1>		
				<div class="lead text-primary">
				@foreach(Auth::user()->contactos as $contacto)
					<div class="custom-control custom-radio my-3 mx-4">
  						<input type="radio" id="customRadio1" name="customRadio" class="custom-control-input" checked="">
  						<label class="custom-control-label" for="customRadio1">
  							{{ $contacto->domicilio.' - ' }}
							{{ $contacto->telefono.' - ' }}
							{{ $contacto->casa_descripcion }}
  						</label>
					</div>
				@endforeach
				</div>
				<div class="row justify-content-center">
					<div class="col-md-5 card border-success text-success text-center mx-1">
				  		<div class="card-body">
						    <h3 class="card-title"><strong>Efectivo</strong></h3>
						    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
						    <a href="{{route('compra.efectivo')}}" class="btn btn-success">Comprar</a>
					 	</div>
					</div>
					<div class="col-md-5 card border-info text-info text-center mx-1">
				  		<div class="card-body">
						    <h3 class="card-title"><strong>Mercado Pago</strong></h3>
						    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
						    <form action="/procesar-pago" method="POST">
			                      <script
			                       src="https://www.mercadopago.com.ar/integrations/v1/web-payment-checkout.js"
			                       data-preference-id="{{ $a ?? ''}}">
			                      </script>
							</form>
					 	</div>
					</div>
				</div>				
			</div>
		</div>
	</div>
@endsection