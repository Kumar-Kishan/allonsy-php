@extends('layouts.auth')


@section('scripts')
@endsection


@section('styles')
.carousel-inner>.item>img, .carousel-inner>.item>a>img {
        display: block;
        max-width: 100%;
        height: auto;
        line-height: 1;
}

a, .btn-link {
    color: white;
}

a:hover, .btn-link:hover {
    color: red;
    text-decoration: none;
}

@endsection

@section('content')

     <div class="row">
        <div class="col-xs-12">
                <div id="carousel" class="carousel slider" data-ride="carousel">
                    <!-- Indicators -->
                            <ol class="carousel-indicators" >
                            <li data-target="#carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel" data-slide-to="1"></li>
                            <li data-target="#carousel" data-slide-to="2"></li>
                            <li data-target="#carousel" data-slide-to="3"></li>
                            <li data-target="#carousel" data-slide-to="4"></li>
                            <li data-target="#carousel" data-slide-to="5"></li>
                             </ol>

                    <div class="carousel-inner" role="listbox">
                        
                         <div class="item active">
                                <img src="{{url('images/scenery (1).jpg')}}" class="carousel-image" >
                            </div>
                        @for ($i = 2; $i < 6; $i++)
    
                            <div class="item">
                                <img src="{{url('images/scenery ('.$i.').jpg')}}" class="carousel-image" >
                            </div>
                        
                        @endfor

                        <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                    
                        <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
           </div>

@endsection