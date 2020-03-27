@foreach(App\Models\TiposProductos::all() as $tproducto)
    <a class="dropdown-item" href="#"> {{$tproducto->tp_descripcion}} </a>
@endforeach


                                   
