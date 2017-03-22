@extends('layouts.app')

    
@section('styles')
    .navbar{
        visibility:hidden;
    }

    .background-image{
    background-image: url('images/scenery (2).jpg');
    background-size: cover;
    display: block;
    filter: blur(5px);
    -webkit-filter: blur(5px);
    height: 1200px;
    left: 0;
    position: fixed;
    right: 0;
    z-index: 1;
}
.content{

    border-radius: 5px;
    top: 10px;
    left: 0;
    position: fixed;
    margin-left: 20px;
    margin-right: 20px;
    right: 0;
    z-index: 2;
    padding: 0 10px;
}

.reveal-dim > .item > img {
  position: absolute;
  top: 0;
  left: 0;
  min-width: 100%;
  height: 50px;
}

.row
{
    margin-top: 30px;
    margin-left: 30px;
}



.range-slider {
  margin: 60px 0 0 0%;
}

.range-slider {
  width: 100%;
}

.range-slider__range {
  -webkit-appearance: none;
  width: calc(100% - (73px));
  height: 10px;
  border-radius: 5px;
  background: #d7dcdf;
  outline: none;
  padding: 0;
  margin: 0;
}
.range-slider__range::-webkit-slider-thumb {
  -webkit-appearance: none;
          appearance: none;
  width: 20px;
  height: 20px;
  border-radius: 50%;
  background: #2c3e50;
  cursor: pointer;
  -webkit-transition: background .15s ease-in-out;
  transition: background .15s ease-in-out;
}
.range-slider__range::-webkit-slider-thumb:hover {
  background: #1abc9c;
}
.range-slider__range:active::-webkit-slider-thumb {
  background: #1abc9c;
}
.range-slider__range::-moz-range-thumb {
  width: 20px;
  height: 20px;
  border: 0;
  border-radius: 50%;
  background: #2c3e50;
  cursor: pointer;
  -webkit-transition: background .15s ease-in-out;
  transition: background .15s ease-in-out;
}
.range-slider__range::-moz-range-thumb:hover {
  background: #1abc9c;
}
.range-slider__range:active::-moz-range-thumb {
  background: #1abc9c;
}

.range-slider__value {
  display: inline-block;
  position: relative;
  width: 60px;
  color: #fff;
  line-height: 20px;
  text-align: center;
  border-radius: 3px;
  background: #2c3e50;
  padding: 5px 10px;
  margin-left: 8px;
}
.range-slider__value:after {
  position: absolute;
  top: 8px;
  left: -7px;
  width: 0;
  height: 0;
  border-top: 7px solid transparent;
  border-right: 7px solid #2c3e50;
  border-bottom: 7px solid transparent;
  content: '';
}

::-moz-range-track {
  background: #d7dcdf;
  border: 0;
}

input::-moz-focus-inner,
input::-moz-focus-outer {
  border: 0;
}

.cards{
    margin-top: 20px;
}

.background-image{
    background-image: url('images/scenery (2).jpg');
    background-size: cover;
    display: block;
    filter: blur(5px);
    -webkit-filter: blur(5px);
    height: 1200px;
    left: 0;
    position: fixed;
    right: 0;
    z-index: 1;
}
.


@endsection

@section('content')
 <div class="container"> 
    
    <div class="panel panel-info">
        <div class="panel-heading"><div class="text-center">SET YOUR PREFERENCES!!</div></div>
        <div class="panel-body">

        <div class="row">

            <div class="col-sm-4 cards">

                <div class="panel panel-info">
                    <div class="panel-heading"><div class="text-center">Heading</div></div>
                    <div class="panel-body">

                          <div class="reveal-dim">
                            <img class="reveal-show" src="{{ url('images/scenery (1).jpg') }}">
                            <div class="reveal-hide reveal-content">
                                <div class="reveal-center">
                                    <span>
                                        <div class="range-slider">
                                            <input class="range-slider__range" type="range" value="0" min="0" max="100">
                                            <span class="range-slider__value">0</span>
                                        </div>
                                    </span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
   
             </div>


            <div class="col-sm-4 cards">

                <div class="panel panel-info">
                    <div class="panel-heading"><div class="text-center">Heading</div></div>
                    <div class="panel-body">

                          <div class="reveal-dim">
                            <img class="reveal-show" src="{{ url('images/scenery (2).jpg') }}">
                            <div class="reveal-hide reveal-content">
                                <div class="reveal-center">
                                    <span>
                                        <div class="range-slider">
                                            <input class="range-slider__range" type="range" value="0" min="0" max="100">
                                            <span class="range-slider__value">0</span>
                                        </div>
                                    </span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
   
             </div>

             <div class="col-sm-4 cards">

                <div class="panel panel-info">
                    <div class="panel-heading"><div class="text-center">Heading</div></div>
                    <div class="panel-body">

                          <div class="reveal-dim">
                            <img class="reveal-show" src="{{ url('images/scenery (3).jpg') }}">
                            <div class="reveal-hide reveal-content">
                                <div class="reveal-center">
                                    <span>
                                        <div class="range-slider">
                                            <input class="range-slider__range" type="range" value="0" min="0" max="100">
                                            <span class="range-slider__value">0</span>
                                        </div>
                                    </span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                
   
             </div>

        </div>

        <div class="row">
            <div class="col-sm-4 cards">

                <div class="panel panel-info">
                    <div class="panel-heading"><div class="text-center">Heading</div></div>
                    <div class="panel-body">

                          <div class="reveal-dim">
                            <img class="reveal-show" src="{{ url('images/scenery (1).jpg') }}">
                            <div class="reveal-hide reveal-content">
                                <div class="reveal-center">
                                    <span>
                                        <div class="range-slider">
                                            <input class="range-slider__range" type="range" value="0" min="0" max="100">
                                            <span class="range-slider__value">0</span>
                                        </div>
                                    </span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
   
             </div>

            <div class="col-sm-4 cards">

                <div class="panel panel-info">
                    <div class="panel-heading"><div class="text-center">Heading</div></div>
                    <div class="panel-body">

                          <div class="reveal-dim">
                            <img class="reveal-show" src="{{ url('images/scenery (2).jpg') }}">
                            <div class="reveal-hide reveal-content">
                                <div class="reveal-center">
                                    <span>
                                        <div class="range-slider">
                                            <input class="range-slider__range" type="range" value="0" min="0" max="100">
                                            <span class="range-slider__value">0</span>
                                        </div>
                                    </span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
   
             </div>

             <div class="col-sm-4 cards">

                <div class="panel panel-info">
                    <div class="panel-heading"><div class="text-center">Heading</div></div>
                    <div class="panel-body">

                          <div class="reveal-dim">
                            <img class="reveal-show" src="{{ url('images/scenery (3).jpg') }}">
                            <div class="reveal-hide reveal-content">
                                <div class="reveal-center">
                                    <span>
                                        <div class="range-slider">
                                            <input class="range-slider__range" type="range" value="0" min="0" max="100">
                                            <span class="range-slider__value">0</span>
                                        </div>
                                    </span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
              
   
             </div>

        </div>
       </div>
       </div>
    </div>
     
 </div>

 @endsection

@section('scripts')
 <script>
 
 $(document).ready(function(){
    
rangeSlider();

 });
var rangeSlider = function(){
  var slider = $('.range-slider'),
      range = $('.range-slider__range'),
      value = $('.range-slider__value');
    console.log(slider);
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $(this).next(value).html(this.value);
      console.log(this.value);
    });
  });
};
</script>
@endsection


