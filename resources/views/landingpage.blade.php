<!DOCTYPE html>
<html>
<head>
  <title>Allons-y!!(Lets go!)</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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

<body data-spy="scroll" data-target=".navbar" data-offset="500">
@include('landinglayout.carousel')
@include('landinglayout.nav')
<div class="content">
    @include('landinglayout.content')
</div>

</body>
</html>
