<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
        <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
  
      <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ url('css/smt-bootstrap.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    
    <style>  
            /*==========  Mobile First Method  ==========*/

            /* Custom, iPhone Retina */ 
            @media only screen and (min-width : 320px) {

            }

            /* Extra Small Devices, Phones */ 
            @media only screen and (min-width : 480px) {

            }

            /* Small Devices, Tablets */
            @media only screen and (min-width : 768px) {

            }

            /* Medium Devices, Desktops */
            @media only screen and (min-width : 992px) {
                .navbar-center{
                    margin-left: 40%;
                }
            }

            /* Large Devices, Wide Screens */
            @media only screen and (min-width : 1200px) {
                .navbar-center{
                    margin-left: 40%;
                }
            }

         
    </style>

    @yield('styles')

    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>

        <div id="app">
            @include('components.nav')
            @yield('content')    
        </div>


        <script src="{{ url('js/app.js') }}"></script>
        @yield('scripts')

</body>
</html>