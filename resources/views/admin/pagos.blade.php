@extends('layouts.app')
@section('title', 'Pagos')
@section('content')
	<div id="app">
		<pagos></pagos>
	</div>
@endsection
@section('scripts')
	<script src="{{asset('js/pagos.js')}}"></script>
@endsection