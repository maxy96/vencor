@foreach(App\Models\TiposProductos::all() as $tproducto)
    <a class="dropdown-item" href="{{route('tipo.producto', $tproducto->slug)}}"> {{$tproducto->tp_descripcion}} </a>
@endforeach


                                   
