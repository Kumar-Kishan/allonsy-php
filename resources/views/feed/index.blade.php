@extends('layouts.app')

@section('styles')

@endsection

@section('content')
<div class="row">
    <div class="col-sm-3">
        <profile-bar></profile-bar>
    </div>

    <div class="col-sm-6">
        <post-composer></post-composer>
    </div>

    <div class="col-sm-3">
       <p> hello </p>
    </div>
    
</div>

<div class="row">
    <div class="col-sm-6 col-sm-offset-3">
        <news-feed></news-feed>
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
        axios.get('/user').then(function(response){
            console.log(response);
        }).catch(function(error){
            console.log(error);

        });
        $("#tags" ).autocomplete({
                source: [
                "ActionScript",
                "AppleScript",
                "Asp",
                "BASIC",
                "C",
                "C++",
                "Clojure",
                "COBOL",
                "ColdFusion",
                "Erlang",
                "Fortran",
                "Groovy",
                "Haskell",
                "Java",
                "JavaScript",
                "Lisp",
                "Perl",
                "PHP",
                "Python",
                "Ruby",
                "Scala",
                "Scheme",
                "dnjfjk"
                ]
            });
    });
</script>
@endsection