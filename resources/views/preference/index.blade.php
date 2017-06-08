@extends('layouts.preference')

@section('content')
        <div class="col-lg-4" v-for="type in types">
            <preference-card :preference="type"></preference-card>
        </div>
    
    
@endsection

@section('script')
<script>
    
    $(function(){
         const app = new Vue({
            el: '#app',
            data:{
                types: [
                    {"name":"Food","image":"images//food.jpg"},
                    {"name":"Pilgrimage","image":"images//pilgrimage.jpg"},
                    {"name":"Thrill","image":"images//thrill.jpg"},
                    {"name":"Chill","image":"images//chill.jpg"},
                    {"name":"Trek","image":"images//trek.jpg"},
                    {"name":"Entertainment","image":"images//entertainment.jpg"}
                ]
            }

        });
        rangeSlider();
    })
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