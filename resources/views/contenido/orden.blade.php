@extends('layouts.app')
@section('title', 'Ordenando producto')
@section('content')

	<div class="container  my-4">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card shadow">
					<div class="card-header bg-orange text-white text-center">{{ __('Seccion de pago') }}</div>
					<div class="card-body ">
						<div class="row ">
							<div class="col-6">
								Nombre: {{Auth::User()->personas()->first()->nombre." ".Auth::User()->personas()->first()->apellido }}
							</div>
							<div class="col-6">
								DNI: {{Auth::User()->personas()->first()->dni}}
							</div>
						</div>
					</div>
					<div class="card-footer bg-white">
						<form action="#" method="POST" id="paymentForm">
							@csrf
							<div class="row mt-3">
								<div class="col">
									<label>Selecciona el metodo de pago</label>
									<div class="form-group" id="toggler">
										<div class="btn-group btn-group-toggle" data-toggle="buttons">
											<label class="btn btn-outline-success rounded m-2 p-1" data-target="#efectivoCollapse" data-toggle="collapse">
												<input type="radio" name="payment_platform" value="efectivo" required="">
												<img class=" img-thumbnail" src="{{asset('image/pagos/efectivo.png')}}" alt="">
											</label>
											<label class="btn btn-outline-primary rounded m-2 p-1" data-target="#mercadopagoCollapse" data-toggle="collapse">
												<input type="radio" name="payment_platform" value="mercadoPago" required>
												<img class="img-thumbnail" src="{{asset('image/pagos/mercadopago.jpg')}}" alt="">
											</label>
										</div>
										<div id="efectivoCollapse" class="collapse" data-parent="#toggler">
											<small class="text-success">Al elegir este metodo, usted pagara en efectivo al momento de recibir su pedido, y se le generará un codigo con el cual este sera identificado. </small>
										</div>
										<div id="mercadopagoCollapse" class="collapse" data-parent="#toggler">
											<small>Cara</small>
										</div>
									</div>
								</div>
							</div>
							<div class="text-center mt-3">
								<button type="submit" id="payButton" class="btn btn-primary">Pagar</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection