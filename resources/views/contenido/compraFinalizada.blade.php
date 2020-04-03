@extends('layouts.app')
@section('title', 'Compra finalizada')
@section('content')
	<div class="container my-4">
		<div class="row justify-content-center">
			<div class="col-md-10">
				<div class="card shadow bg-white">
					<div class="card-body justify-content-center text-center">
					@if(session()->has('codigo'))
						<h1 class="text-primary">¡Gracias por su compra!</h1>
						<h3>Recuerde usar el siguiente codigo al momento de recibir sus productos</h3>
						
							<h4 class="text-orange">{{ session()->get('codigo') }}</h4>
							<h5>Tambien puede descargar su factura</h5>
							<a href="{{route('orden.factura', session()->get('codigo'))}}" class="btn btn-block btn-success">Factura</a>
					@else
						<h1 class="text-danger">Datos no encontrados</h1>
					@endif
					</div>					
				</div>
			</div>
		</div>
	</div>
@endsection