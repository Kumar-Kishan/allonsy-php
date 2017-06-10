@extends('layouts.app')

@section('styles')
<style>
   
</style>
@endsection

@section('content')

<div class="panel panel-default">
    <div class="panel-body">
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