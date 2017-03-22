<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ url('css/smt-bootstrap.css')}}" rel="stylesheet">


    <style>
         a {
            background-color: transparent;
            font-size: 30px;
            padding: 15px;
            color: white;
        }

       [class*="reveal-dim"] .reveal-content .reveal-center>span {
    display: table-cell;
    vertical-align: right;
    text-align: center;
    height: 50%;
    width:50%;
}


        .navbar-brand
        {
            color: white;
            font-size : 30px;
        }    
        
        @yield('styles')
    </style>
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="app">
        <div class="background-image"></div>   
        <div class="content">
            @include('layouts.nav')
            @yield('content')
        </div>
    <div>
    <script src="{{ url('js/app.js') }}"></script>
       @yield('scripts')
</body>
    
</html>
