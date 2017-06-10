@extends('layouts.app')

@section('styles')
<style>
    .sidebar {
    position: absolute;
    width: 20%;
    height: 100%;
    z-index: 10001;
    visibility: block;
}
</style>
@endsection

@section('content')
    
<div class="main-container">

  <div class="col-lg-3  sidebar sidebar-left sidebar-lg-show active" id="leftsidebar">
        <profile-bar></profile-bar>
  </div>

  <div class="col-lg-6 col-md-12 col-sm-offset-3 main-content">
    <p>mid content</p>
  </div>

  <div  class=" col-lg-3 sidebar sidebar-right sidebar-lg-show active">
    <p>Suggested places</p>
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