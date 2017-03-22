<!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
      </ol>
      <div class="carousel-inner">
       <div class="item active">
          <img class="third-slide" src="{{url('images/scenery (1).jpg')}}">
          <div class="container">
            <div class="carousel-caption">
              <h1>ALLONSY!! Let's Go!!</h1>
              <p></p>
              
            </div>
          </div>
        </div>
        @for ($i = 2; $i < 6; $i++)
    
        <div class="item">
          <img class="third-slide" src="{{url('images/scenery ('.$i.').jpg')}}">
          <div class="container">
            <div class="carousel-caption">
              <h1>{{$quote[$i - 2]}}</h1>
              <p>{{$quoter[$i-2]}}</p>
              
            </div>
          </div>
        </div>
         @endfor
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
</div><!-- /.carousel -->
