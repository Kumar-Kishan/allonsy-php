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
            /*background-color: transparent;*/
            font-size: 30px;
            
        }

        .navbar-wrapper .navbar {
            padding-right: 0px;
            padding-left: 0px;
        }

         
        .navbar-brand
        {
            font-size : 30px;
        }    

         .navbar {
      margin-bottom: 0px;
        }

    .affix {
            top:0;
            width: 100%;
            z-index: 9999 !important;
        }

  .affix ~ .container-fluid {
     position: relative;
     top: 50px;
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
<body data-spy="scroll" data-target=".navbar" data-offset="50">
                
    @include('landinglayout.landingnav')
    @yield('content')

    <!-- Scripts -->
     <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
