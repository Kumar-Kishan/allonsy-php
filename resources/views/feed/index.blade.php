@extends('layouts.app')

@section('styles')

@endsection

@section('content')

    <div class="col-sm-3">
        <profile-bar></profile-bar>
    </div>

    <div class="col-sm-6">
        <post-composer></post-composer>
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
    });
</script>
@endsection