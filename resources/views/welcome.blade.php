@extends('layouts.app')
@section('title', 'vencor')

@section('content')
	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img class="w-100 img-carousel" src="{{asset('vencor1.jpg')}}" alt="First slide">
	    </div>
	  </div>
	</div>

	<div class="content-logo">
		<div class="container-fluid">
			<div class="row justify-content-center">
				<div class="col-md-8">
					<img class="img-fluid" src="{{asset('vencor-presentacion.png')}}" style="width: 100%;" alt="vencor">
				</div>
			</div>
		</div>
		<div class="bg-whitetransparent">
			<h1 class="text-dark text-center txt-responsive">
				<strong>ABASTEZCA SU HOGAR SIN MOVERSE DE SU CASA</strong>
			</h1>
			<h1 class="text-dark text-center txt-responsive">
				<strong>NOSOTROS VAMOS A SU DOMICILIO</strong>
			</h1>
		</div>	
	</div>	
	
		<div class="container my-4">
		<div class="row my-4 py-4">
			<div class="col-md-4 ">
				<img class="w-100 rounded-circle" src="{{asset('vencor-pregunta.jpg')}}" alt="">
			</div>
			<div class="col-md-8 py-4 px-4">
				<div class="row justify-content-center">
					<div class="col-8">
						<h1 class="text-center text-bluelight txt-responsive">¿Que es vencor?</h1>
						<h4 class="text-center text-orange txt-responsive">					
							Vencor  es  una  tienda  online  donde  encontraras  los productos  necesarios  para  abastecer  tu  hogar. <br>
							Puedes encontrar desde lactos, panificados, entre otros de los que mas necesites. <br>
							Vencor se encargara de llevarte los productos solicitados hasta la puerta de tu casa. <br>							
						</h4>
					</div>
				</div>			
			</div>
		</div>
	</div>

	<div class="container my-4">
		<h1 class="text-center text-bluelight">Algunos de nuestros Productos</h1>
		<div id="carouselProducts" class="carousel slide" data-ride="carousel">
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		    	<div class="row">
		    		<div class="col-4"><img class="w-100 d-block" src="{{asset('vencor1.jpg')}}" alt="First slide"></div>
		    		<div class="col-4"><img class="w-100 d-block" src="{{asset('vencor1.jpg')}}" alt="First slide"></div>
		    		<div class="col-4"><img class="w-100 d-block" src="{{asset('vencor1.jpg')}}" alt="First slide"></div>
		    	</div>      
		    </div>
		    <div class="carousel-item">
		    	<div class="row">
		    		<div class="col-4"><img class="w-100 d-block" src="{{asset('vencor2.jpg')}}" alt="Second slide"></div>
		    		<div class="col-4"><img class="w-100 d-block" src="{{asset('vencor2.jpg')}}" alt="Second slide"></div>
		    		<div class="col-4"><img class="w-100 d-block" src="{{asset('vencor2.jpg')}}" alt="Second slide"></div>
		    	</div>
		    </div>
		    <div class="carousel-item">
		    	<div class="row">
		    		<div class="col-4"><img class="w-100 d-block" src="{{asset('vencor3.jpg')}}" alt="Third slide"></div>
		    		<div class="col-4"><img class="w-100 d-block" src="{{asset('vencor3.jpg')}}" alt="Third slide"></div>
		    		<div class="col-4"><img class="w-100 d-block" src="{{asset('vencor3.jpg')}}" alt="Third slide"></div>
		    	</div>	     
		    </div>
		  </div>
		  	<a class="carousel-control-prev text-dark" href="#carouselProducts" role="button" data-slide="prev">
    			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    			<span class="sr-only">Previous</span>
  			</a>
 			 <a class="carousel-control-next" href="#carouselProducts" role="button" data-slide="next">
    			<span class="carousel-control-next-icon" aria-hidden="true"></span>
    			<span class="sr-only">Next</span>
  			</a>
		</div>
		<div class="row justify-content-center my-4">
			<div class="col-lg-2 col-md-3 col-6">
				<a class="btn btn-orange" href="{{route('productos')}}">Quiero ver los productos!</a>
			</div>
		</div>
	</div>

@endsection
@section('scripts')
	<script src="{{ asset('js/scroll.js') }}" defer></script>
@endsection