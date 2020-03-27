<div class="dropdown d-inline-block mx-4">
  <button class="btn btn-success btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    {{__('Agregar nuevo tipo de producto')}}
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
      <form class="px-4 py-3" method="POST" action="{{route('nuevo.tipo.producto')}}">
        @csrf
        <div class="form-group">
          <label for="exampleDropdownFormEmail1">Nuevo Tipo de producto</label>
          <input type="text" name="descripcion" class="form-control @error('descripcion') is-invalid @enderror" id="descripcion" placeholder="Ejemplo: harina.">
          @error('descripcion')
             <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </form>
  </div>
</div>