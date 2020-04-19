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
				<div class="card shadow">
					<div class="card-header bg-orange text-white">{{__('Agregar datos de Contacto')}}</div>
					<div class="card-body">
						<form method="POST" action="{{ route('guardar.contacto') }}">
							@csrf
							<div class="row">
								<div class="col-md-6">
									<div class="form-group row">
	                            		<label for="nombre" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>
			                            <div class="col-md-8">
			                                <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}" required autofocus>

			                                @error('nombre')
			                                    <span class="invalid-feedback" role="alert">
			                                        <strong>{{ $message }}</strong>
			                                    </span>
			                                @enderror
			                            </div>
	                        		</div> 
								</div>
								<div class="col-md-6">
									<div class="form-group row">
	                            		<label for="apellido" class="col-md-4 col-form-label text-md-right">{{ __('Apellido') }}</label>
	                            		<div class="col-md-8">
	                               			 <input id="apellido" type="text" class="form-control @error('apellido') is-invalid @enderror" name="apellido" value="{{ old('apellido') }}" required autofocus>
			                                @error('apellido')
			                                    <span class="invalid-feedback" role="alert">
			                                        <strong>{{ $message }}</strong>
			                                    </span>
			                                @enderror
	                            		</div>
	                        		</div> 
								</div>
								<div class="col-md-6">
									 <div class="form-group row">
			                            <label for="dni" class="col-md-4 col-form-label text-md-right">{{ __('DNI') }}</label>

			                            <div class="col-md-8">
			                                <input id="dni" type="text" class="form-control @error('dni') is-invalid @enderror" name="dni" value="{{ old('dni') }}" required autofocus>

			                                @error('dni')
			                                    <span class="invalid-feedback" role="alert">
			                                        <strong>{{ $message }}</strong>
			                                    </span>
			                                @enderror
			                            </div>
	                       			 </div> 
								</div>
								<div class="col-md-6">
									 <div class="form-group row">
			                            <label for="tipohogar" class="col-md-4 col-form-label text-md-right">{{ __('Tipo de hogar') }}</label>

			                            <div class="col-md-8">
			                                <select class="form-control" name="tipohogar" required>
			                                	@foreach($thogar as $hogar)
			                                    	<option value="{{$hogar->id_tipoVivienda}}">{{$hogar->descripcion}}</option>
			                                    @endforeach
			                                </select>

			                                @error('tipohogar')
			                                    <span class="invalid-feedback" role="alert">
			                                        <strong>{{ $message }}</strong>
			                                    </span>
			                                @enderror
			                            </div>
	                       			 </div> 
								</div>
								<div class="col-md-6">
									 <div class="form-group row">
			                            <label for="domicilio" class="col-md-4 col-form-label text-md-right">{{ __('Domicilio') }}</label>

			                            <div class="col-md-8">
			                                <input id="domicilio" type="text" class="form-control @error('domicilio') is-invalid @enderror" name="domicilio" value="{{ old('domicilio') }}" required autofocus>

			                                @error('domicilio')
			                                    <span class="invalid-feedback" role="alert">
			                                        <strong>{{ $message }}</strong>
			                                    </span>
			                                @enderror
			                            </div>
	                       			 </div> 
								</div>
								<div class="col-md-6">
									<div class="form-group row">
			                            <label for="altura" class="col-md-4 col-form-label text-md-right">{{ __('Altura') }}</label>

			                            <div class="col-md-8">
			                                <input id="altura" type="text" class="form-control @error('altura') is-invalid @enderror" name="altura" value="{{ old('altura') }}" required placeholder="Ej: 01, 22, 333, 4444">

			                                @error('altura')
			                                    <span class="invalid-feedback" role="alert">
			                                        <strong>{{ $message }}</strong>
			                                    </span>
			                                @enderror
			                            </div>
	                       		 	</div>
								</div>
								<div class="col-md-12">
									<div class="form-group row">
	                            		<label for="casa_descripcion" class="col-md-2 col-form-label text-md-right">{{ __('Breve descripcion de la casa') }}</label>
	                            		<div class="col-md-10">
			                                <textarea id="casa_descripcion" type="text" class="form-control @error('casa_descripcion') is-invalid @enderror" name="casa_descripcion" value="{{ old('casa_descripcion') }}" required autofocus placeholder="Color de casa o departamento, etc." style="resize: none;" rows="6"></textarea>

			                                @error('casa_descripcion')
			                                    <span class="invalid-feedback" role="alert">
			                                        <strong>{{ $message }}</strong>
			                                    </span>
			                                @enderror
	                            		</div>
	                        		</div>
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