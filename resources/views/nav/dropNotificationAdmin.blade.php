@if(App\Models\OrdenPedidos::where('tipoPedido_id', '=', 1)->count() >0)
@foreach(App\Models\OrdenPedidos::where('tipoPedido_id', '=', 1)->get() as $item)
        <li class="list-group-item border border-danger my-1">
            <div class="row justify-content-center">
                <div class="col-md-3">
                    {{$item->user()->first()->nombre}}
                    {{$item->user()->first()->apellido}}
                </div>
                <div class="col-md-9">
                        {{__('Solicita un nuevo pedido')}}
                </div>
                <hr>
            </div>
        </li>
@endforeach
    <div class="row" style="margin: 0px;">
        <a class="btn btn-primary btn-sm btn-block" href="#">
            Ver Pedidos <i class="fa fa-eye"></i>
        </a>
    </div>
@else
        <li class="list-group-item">No se ha solicitado pedidos</li>
@endif