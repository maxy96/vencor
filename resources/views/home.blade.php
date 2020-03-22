@extends('layouts.app')

@section('content')
<div class="container my-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">¡Hola {{ Auth::User()->nombre." ".Auth::User()->apellido }}!</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   Te has registrado correctamente!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
