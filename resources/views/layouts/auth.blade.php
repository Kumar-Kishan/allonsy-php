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
    <link href="{{ url('css/smt-bootstrap.css')}}" rel="stylesheet">
    
    <style>
         .navbar{
            background-color: black;
            font:white;
        }

        .carousel-inner>.item>img, .carousel-inner>.item>a>img {
                display: block;
                max-width: 100%;
                height: auto;
                line-height: 1;
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
        <div class="container-fluid">
            @yield('content')
        </div>

    <!-- Scripts -->
     <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
