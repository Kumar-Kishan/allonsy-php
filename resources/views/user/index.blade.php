@extends('layouts.app')

@section('styles')

@endsection

@section('content')

   <div class="col-sm-3">
        <div class="col-sm-12">
            <profile-bar :user="user"></profile-bar>
              <div class="bs-divider"><b> Try These Places!!</b></div>
            <suggestion-box></suggestion-box>
        </div>
        
    </div>
    
    <div class="col-sm-6">         
        <div class="col-sm-12">
            <news-feed :url=url></news-feed>
        </div>            
    </div>

    <div class="col-sm-3">
          <gallery></gallery>
    </div>
    
@endsection

@section('scripts')
<script>
      $(function(){
         const app = new Vue({
            el: '#app',
            data:{
               user: {!! Auth::user() !!},
               url: "/feeds/"
            }
        });
      });

</script>
@endsection