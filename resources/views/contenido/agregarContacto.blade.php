@extends('layouts.app')
@section('title', 'Agregar Contacto')
@section('content')
	<div class="container my-4">
		<div class="row justify-content-center">
			<div class="col-md-8">
				@if(session()->has('alert_msg'))
	            <div class="alert alert-danger alert-dismissible fade show" role="alert">
	                {{ session()->get('alert_msg') }}
	                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	                    <span aria-hidden="true">×</span>
	                </button>
	            </div>
	       	 	@endif
				<div class="card shadow-sm">
					<div class="card-header bg-orange text-white">{{__('Agregar datos de Contacto')}}</div>
					<div class="card-body">
						<form method="POST" action="{{ route('guardar.contacto') }}">
							@csrf
	                        <div class="form-group row">
	                            <label for="telefono" class="col-md-4 col-form-label text-md-right">{{ __('Telefono') }}</label>

	                            <div class="col-md-6">
	                                <input id="telefono" type="text" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="{{ old('telefono') }}" required autofocus placeholder="3794 o 3795">

	                                @error('telefono')
	                                    <span class="invalid-feedback" role="alert">
	                                        <strong>{{ $message }}</strong>
	                                    </span>
	                                @enderror
	                            </div>
	                        </div> 

	                        <div class="form-group row">
	                            <label for="domicilio" class="col-md-4 col-form-label text-md-right">{{ __('Domicilio') }}</label>

	                            <div class="col-md-6">
	                                <input id="domicilio" type="text" class="form-control @error('domicilio') is-invalid @enderror" name="domicilio" value="{{ old('domicilio') }}" required autofocus>

	                                @error('domicilio')
	                                    <span class="invalid-feedback" role="alert">
	                                        <strong>{{ $message }}</strong>
	                                    </span>
	                                @enderror
	                            </div>
	                        </div> 

	                        <div class="form-group row">
	                            <label for="altura" class="col-md-4 col-form-label text-md-right">{{ __('Altura') }}</label>

	                            <div class="col-md-6">
	                                <input id="altura" type="text" class="form-control @error('altura') is-invalid @enderror" name="altura" value="{{ old('altura') }}" required autofocus>

	                                @error('altura')
	                                    <span class="invalid-feedback" role="alert">
	                                        <strong>{{ $message }}</strong>
	                                    </span>
	                                @enderror
	                            </div>
	                        </div>  

	                        <div class="form-group row">
	                            <label for="casa_descripcion" class="col-md-4 col-form-label text-md-right">{{ __('Breve descripcion de la casa') }}</label>

	                            <div class="col-md-6">
	                                <input id="casa_descripcion" type="text" class="form-control @error('casa_descripcion') is-invalid @enderror" name="casa_descripcion" value="{{ old('casa_descripcion') }}" required autofocus placeholder="Color de casa o departamento, etc.">

	                                @error('casa_descripcion')
	                                    <span class="invalid-feedback" role="alert">
	                                        <strong>{{ $message }}</strong>
	                                    </span>
	                                @enderror
	                            </div>
	                        </div> 

	                        <div class="form-group row mb-0">
	                            <div class="col-md-6 offset-md-4">
	                                <button type="submit" class="btn btn-primary">
	                                    {{ __('Agregar contacto') }}
	                                </button>
	                            </div>
                        	</div>  
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection