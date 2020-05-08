<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>


    <!-- Fonts -->
    <link rel="icon" type="image/x-icon" href="{{asset('favicon.ico')}}">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    
    <!--<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">-->
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/toastr.css') }}" rel="stylesheet">
    @yield('styles')
</script>  
</head>
<body>
    <!-- Dark Overlay element -->
    {{--<div class="overlay"></div>--}}
    {{-- @include('nav.sidebar') --}}
    
    @include('nav.nav')     
    @yield('content')
    @include('layouts.notification')
    @include('layouts.whatsApp')
    @include('layouts.infoCookies')
    @include('layouts.footer')
       

    <script src="{{ asset('js/app.js') }}" ></script> 
     @yield('scripts')
</body>
</html>
