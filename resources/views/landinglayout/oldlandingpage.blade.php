<!DOCTYPE html>
<html>
<head>
  <title>Allons-y!!(Lets go!)</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="public/css/main.css" />

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="public/js/jquery.min.js"></script>
  <script src="public/js/jquery.scrolly.min.js"></script>
  <script src="public/js/jquery.dropotron.min.js"></script>
  <script src="public/js/jquery.scrollex.min.js"></script>
  <script src="public/js/skel.min.js"></script>
  <script src="public/js/util.js"></script>
  <!--[if lte IE 8]><script src="public/js/ie/respond.min.js"></script><![endif]-->
  <script src="public/js/main.js"></script>

  <style>

  body {
      position: relative; 
  }
 
  .carousel {
  height: 550px;
}
  .affix {
      top:0;
      width: 100%;
      z-index: 9999 !important;
  }
  .navbar {
      margin-bottom: 0px;      
  }

  .affix ~ .container-fluid {
     position: relative;
     top: 550px;
  }

  
  /* Declare heights because of positioning of img element */
.carousel .item {
  height: 550px;
  background-color: #777;
}
.carousel-inner > .item > img {
  position: absolute;
  top: 0;
  left: 0;
  min-width: 100%;
  height: 550px;
}
.content
{
    margin-top: 40px;
    margin-left: 40px;
}
  </style>
</head>

<body class="landing">
<div class="page-wrapper">
  {{-- @include('landinglayout.carousel') --}}
  @include('landinglayout.nav')

    <div class="content">
        @include('landinglayout.content')
    </div>

</div>
</body>
</html>
