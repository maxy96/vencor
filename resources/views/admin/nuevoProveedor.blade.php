@extends('layouts.app')
@section('title', 'Agregar proveedor')
@section('content')
	<div class="container my-4">
		@if(session()->has('success_msg'))
	        <div class="alert alert-success alert-dismissible fade show" role="alert">
	         	{{ session()->get('success_msg') }}
	         	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	        		<span aria-hidden="true">×</span>
	            </button>
	        </div>
	    @endif
		<div class="row justify-content-center">
			<div class="col-md-10 col-lg-8">
				<h2 class="text-center">Nuevo proveedor</h2>
				<div class="card my-2 shadow">
					<div class="card-body">
						@include('formularios.agregarProveedor')
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection