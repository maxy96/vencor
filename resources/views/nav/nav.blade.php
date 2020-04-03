<nav class="navbar navbar-expand-md  @if(Request::segment(1)<>null) navbar-orange sticky-top bg-white shadow-sm @else navbar-white fixed-top @endif" style="transition: 0.5s ease;">
     <div id="menu" class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{asset('logo-vencor.png')}}" style="height: 2.5rem;" alt="vencor">
                </a>
                <button class="navbar-toggler bg-bluelight" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <i class="fa fa-bars text-white" style="font-size: 25px;"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item mx-1 my-1">
                            <a class="nav-link" href="{{route('productos')}}">{{ __('Productos')}} </a>
                        </li>
                        <li class="nav-item dropdown mx-1 my-1">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{__('Categorias')}} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    @include('nav.tipoProducto-drop')
                                </div>
                            </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item mx-1 my-1">
                                <a class=" btn btn-primary" href="{{ route('login') }}"><i class="fa fa-sign-in"></i> {{ __('Iniciar sesion') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item mx-1 my-1">
                                    <a class=" btn btn-success" href="{{ route('register') }}"><i class="fa fa-user-o"></i> {{ __('Registrarse') }}</a>
                                </li>
                            @endif
                        @else
                            
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="fa fa-user-circle-o" style="font-size: 21px;"></i> <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                   <!--dropdown user -->     
                                   @if(Auth::user()->perfil_id == 1)
                                        @include('nav.dropAdmin')
                                   @else
                                        @include('nav.dropCliente')                
                                   @endif                                 
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar sesion') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @if(Auth::user()->perfil_id == 1)
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="badge badge-pill badge-dark">
                                        <i class="fa fa-bell"></i> {{App\Models\OrdenPedidos::where('tipoPedido_id', '=', 1)->count()}}
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="width: 390px; padding: 0px; border-color: #9DA0A2">
                                    <ul class="list-group" style="margin: 20px;height: 400px; overflow-y: scroll;">
                                        @include('nav.dropNotificationAdmin')
                                    </ul>
                                </div>
                            </li>
                            @endif

                            <li class="nav-item dropdown">
                                 <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="badge badge-pill badge-dark">
                                        <i class="fa fa-shopping-cart"></i> {{ \Cart::session(\Auth::user()->id_user)->getTotalQuantity()}}
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="width: 450px; padding: 0px; border-color: #9DA0A2">
                                    <ul class="list-group" style="margin: 20px;">
                                        @include('nav.cart-drop')
                                    </ul>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
     </div>
</nav>