@extends('layouts.app')

@section('styles')

}
@endsection

@section('content')
<div class="row">
    <div class="col-sm-3">    
        <profile-bar></profile-bar>
    </div>

    <div class="col-sm-6">
<<<<<<< HEAD
        <post-composer></post-composer>
        <suggestion :post="xyz"></suggestion>
=======
            <post-composer></post-composer>
>>>>>>> 38b8680e5ad66f4d5ee99077a274dd252da182e1
    </div>

     <div class="col-sm-3">
        <div class="bs-divider"><i class="fa fa-star"></i> Recommendations <i class="fa fa-star"></i></div>

        <suggestion-box></suggestion-box>
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
<<<<<<< HEAD
                xyz: { "user":"Steve" }
=======
                abc: {"user":"Kishan"}
>>>>>>> 38b8680e5ad66f4d5ee99077a274dd252da182e1
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