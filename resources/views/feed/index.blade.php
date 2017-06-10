@extends('layouts.app')

@section('styles')
<style>
   .container{
       padding-top: 60px;
       padding-left: 0px;
       padding-right: 0px;
       margin-right: 0;
       margin-left:0;
   }
</style>
@endsection

@section('content')

<div class="container">
    <div class="col-sm-3">
        <profile-bar></profile-bar>
    </div>
</div>
    

@endsection

@section('scripts')
<script>
      $(function(){
         const app = new Vue({
            el: '#app',
            data:{
                
            }

        });

        
       
    })
</script>
@endsection