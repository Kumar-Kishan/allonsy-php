<!DOCTYPE html>
<html lang="en">
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


    <link href="{{ url('css/carousel.css')}}" rel="stylesheet">
    
    <style>
         .navbar {
            background-color: transparent;
            font-size: 30px;
            padding: 15px;
        }


        .navbar-brand
        {
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
       
    @include('layouts.nav')
       
            @yield('content')
       
    <!-- Scripts -->
     <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
