<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="icon" type="image/x-icon" href="{{asset('favicon.ico')}}">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    
    <!--<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">-->
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    @include('nav.nav')
                 
    @yield('content')
    @include('layouts.whatsApp')
    @include('layouts.infoCookies')
    @include('layouts.footer')
    @yield('script')
</body>
</html>
