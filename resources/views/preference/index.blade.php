@extends('layouts.preference')

@section('styles')
    <style>
    .rowstyle{
        padding-left: 20px; 
        padding-right: 20px;
    }
    .buttonrow{
        padding-right: 40px;
    }
    </style>
@endsection

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 ">
            <div class="bs-divider"><h2><b>Set Your Preferences!</b></h2></div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="alert alert-danger" id="alert" style="display: none;">
                <strong>Oh snap!</strong> <a href="javascript:;" class="alert-link">Change a few things up</a> and try submitting again.
            </div>
        </div>
    </div>
    <div class="row rowstyle" v-for="preference in preferences">
        <div class="col-lg-4" v-for="type in preference">
            <preference-card :preference="type"></preference-card>            
        </div>    
    </div>

    <div class="row buttonrow">
        <a href="#" id="btn" class="btn btn-bold btn-save btn-danger" style="float:right;"><i class="fa fa-check btn-icon-left"></i>Done</a>
    </div>
  
                
</div>

    
     
@endsection

@section('script')
<script>
    
    $(function(){
         const app = new Vue({
            el: '#app',
            data:{
                preferences: [
                    [{"name":"Food","image":"images//food.jpg"},
                    {"name":"Pilgrimage","image":"images//pilgrimage.jpg"},
                    {"name":"Thrill","image":"images//thrill.jpg"}],
                    [{"name":"Chill","image":"images//chill.jpg"},
                    {"name":"Trek","image":"images//trek.jpg"},
                    {"name":"Entertainment","image":"images//entertainment.jpg"}]
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
    
    $(document).ready(function(){
       
        $(btn).click(function(){
           
            axios.post('/preferences', {
                fooding : $('#Food').val(),
                pilgrimaging: $('#Pilgrimage').val(),
                thrilling: $('#Thrill').val(),
                chilling: $('#Chill').val(),
                trekking: $('#Trek').val(),
                entertaining: $('#Entertainment').val(),
                _token: Laravel.csrfToken
            })
            .then(function (response) {
                window.location = "/feed";
            })
            .catch(function (error) {
                //alert(error);
                $('#alert').show();
            });
        })
    })

</script>
@endsection