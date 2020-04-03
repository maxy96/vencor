@extends('layouts.app')
@section('title', 'Carrito')
@section('content')
    <div class="container my-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('productos')}}">Productos</a></li>
                <li class="breadcrumb-item active" aria-current="page">Carrito</li>
            </ol>
        </nav>
        {{-- dd(empty(Auth::User()->contactos()->first())) --}}
        @if(session()->has('success_msg'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session()->get('success_msg') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        @endif
        @if(session()->has('alert_msg'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{ session()->get('alert_msg') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        @endif
        @if(count($errors) > 0)
            @foreach($errors->all() as $error)
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ $error }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
            @endforeach
        @endif
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <br>
                @if(\Cart::getTotalQuantity()>0)
                    <h4>{{ \Cart::getTotalQuantity()}} {{__('Producto en su carrito')}}</h4><br>
                @else
                    <h4>{{__('No hay productos en su carrito')}}</h4><br>
                    <a href="{{route('productos')}}" class="btn btn-dark">Continuar comprando</a>
                @endif

                @foreach($cartCollection as $item)
                    <div class="row">
                        <div class="col-lg-3">
                            <img src="{{ asset("image/".$item->attributes->image) }}" class="img-thumbnail" width="200" height="200" style="height: 104.56px;">
                        </div>
                        <div class="col-lg-5">
                            <p>
                                <b><a href="#">{{ $item->name }}</a></b><br>
                                <b>Price: </b>${{ $item->price }}<br>
                                <b>Sub Total: </b>${{ \Cart::session(Auth::user()->id_user)->get($item->id)->getPriceSum() }}<br>
                     
                                {{--                                <b>With Discount: </b>${{ \Cart::get($item->id)->getPriceSumWithConditions() }}--}}
                            </p>
                        </div>
                        <div class="col-lg-4">
                            <div class="row">
                                <form action="{{ route('cart.update') }}" method="POST">
                                    {{ csrf_field() }}
                                    <div class="form-group row">
                                        <input type="hidden" value="{{ $item->id}}" id="id" name="id">
                                        <input type="number" class="form-control form-control-sm" value="{{ $item->quantity }}"
                                               id="quantity" name="quantity" style="width: 70px; margin-right: 10px;">
                                        <button class="btn btn-success btn-sm" style="margin-right: 25px;"><i class="fa fa-edit"></i></button>
                                    </div>
                                </form>
                                <form action="{{ route('cart.remove') }}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="hidden" value="{{ $item->id }}" id="id" name="id">
                                    <button class="btn btn-danger btn-sm" style="margin-right: 10px;"><i class="fa fa-trash"></i></button>
                                </form>
                                
                            </div>
                        </div>

                    </div>
                    <hr>
                @endforeach
                @if(count($cartCollection)>0)
                    <form action="{{ route('cart.clear') }}" method="POST">
                        {{ csrf_field() }}
                        <button class="btn btn-dark btn-md">Limpiar Carrito</button>
                    </form>
                @endif
            </div>
            @if(count($cartCollection)>0)
                <div class="col-lg-5">
                    <div class="card">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><b>Total: </b>${{ \Cart::getTotal() }}</li>
                        </ul>
                    </div>
                    <br><a href="{{ url()->previous() }}" class="btn btn-primary">{{__('Continuar comprando')}}</a>
                    <a href="{{route('orden.producto')}}" class="btn btn-success">{{__('Ordenar productos')}}</a>
                </div>
            @endif
        </div>
        <br><br>
    </div>
@endsection
