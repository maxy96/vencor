<div class="modal fade" id="formulario" tabindex="-1" role="dialog" aria-labelledby="agregarProducto" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		 <div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="agregarProducto">Agregar producto nuevo</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="POST" action="{{ route('guardar.producto') }}" enctype="multipart/form-data">
	                        @csrf

	                        <div class="form-group row">
	                            <label for="tipo" class="col-md-4 col-form-label text-md-right">{{ __('Tipo producto') }}</label>

	                            <div class="col-md-6">
	                            	<select name="tipoProducto" id="tipoProducto" class="form-control @error('tipoProducto') is-invalid @enderror" name="tipoProducto" value="{{ old('tipoproducto') }}" required>
	                            		<option value="">-- Seleccionar tipo de producto --</option>
	                            		@foreach(App\Models\TiposProductos::all() as $tproducto)
    										<option value="{{$tproducto->id_tipoProducto}}"> {{$tproducto->tp_descripcion}} </a>
										@endforeach
	                            	</select>
	                                
	                                @error('tipoProducto')
	                                    <span class="invalid-feedback" role="alert">
	                                        <strong>{{ $message }}</strong>
	                                    </span>
	                                @enderror
	                            </div>
	                        </div>
	                        
	                        <div class="form-group row">
	                            <label for="nombre" class="col-md-4 col-form-label text-md-right">{{ __('Nombre producto') }}</label>

	                            <div class="col-md-6">
	                                <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}" required autofocus>

	                                @error('nombre')
	                                    <span class="invalid-feedback" role="alert">
	                                        <strong>{{ $message }}</strong>
	                                    </span>
	                                @enderror
	                            </div>
	                        </div>


	                        <div class="form-group row">
	                            <label for="marca" class="col-md-4 col-form-label text-md-right">{{ __('Marca') }}</label>

	                            <div class="col-md-6">
	                                <input id="marca" type="text" class="form-control @error('marca') is-invalid @enderror" name="marca" value="{{ old('marca') }}" required autofocus>

	                                @error('marca')
	                                    <span class="invalid-feedback" role="alert">
	                                        <strong>{{ $message }}</strong>
	                                    </span>
	                                @enderror
	                            </div>
	                        </div>

	                        <div class="form-group row">
	                            <label for="stock" class="col-md-4 col-form-label text-md-right">{{ __('Stock') }}</label>

	                            <div class="col-md-6">
	                                <input id="stock" type="number" class="form-control @error('stock') is-invalid @enderror" name="stock" value="{{ old('stock') }}" required autofocus>

	                                @error('stock')
	                                    <span class="invalid-feedback" role="alert">
	                                        <strong>{{ $message }}</strong>
	                                    </span>
	                                @enderror
	                            </div>
	                        </div>

	                        <div class="form-group row">
	                            <label for="precio" class="col-md-4 col-form-label text-md-right">{{ __('Precio') }}</label>

	                            <div class="col-md-6">
	                                <input id="precio" type="number" placeholder="0.00" step="0.01" class="form-control @error('precio') is-invalid @enderror" name="precio" value="{{ old('precio') }}" required autofocus>

	                                @error('precio')
	                                    <span class="invalid-feedback" role="alert">
	                                        <strong>{{ $message }}</strong>
	                                    </span>
	                                @enderror
	                            </div>
	                        </div>

	                        <div class="form-group row">
	                            <label for="imagen" class="col-md-4 col-form-label text-md-right">{{ __('Subir imagen') }}</label>

	                            <div class="col-md-6">
	                                <input id="imagen" type="file" class=" @error('imagen') is-invalid @enderror" accept="image/*" name="imagen" value="{{ old('imagen') }}" required autofocus>

	                                @error('imagen')
	                                    <span class="invalid-feedback" role="alert">
	                                        <strong>{{ $message }}</strong>
	                                    </span>
	                                @enderror
	                            </div>
	                        </div>

	                        <div class="form-group row mb-0">
	                            <div class="col-md-6 offset-md-4">
	                                <button type="submit" class="btn btn-primary">
	                                    {{ __('Agregar producto nuevo') }}
	                                </button>
	                            </div>
	                        </div>
	            </form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Send message</button>
			</div>
		</div>
	</div>
</div>