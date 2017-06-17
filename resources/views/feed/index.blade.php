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
    
    
    <div class="col-sm-3">
        <div class="bs-divider"><i class="fa fa-star"></i> Recommendations <i class="fa fa-star"></i></div>

        <suggestion-box></suggestion-box>
    </div>

@endsection

@section('scripts')
<script>
      $(function(){
         const app = new Vue({
            el: '#app',
            data:{
                abc: {"user":"Kishan"}
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

@section('styles')
<style>
.bs-divider {
    color: indianred;
}
</style>