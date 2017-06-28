@extends('layouts.app')

@section('styles')

}
@endsection

@section('content')
<div class="row">
    <div class="col-sm-3">    
        <profile-bar :user="user"></profile-bar>
    </div>

    <div class="col-sm-6">

            <post-composer></post-composer>
            <div class="col-sm-12">
                <news-feed></news-feed>
            </div>

    </div>

     <div class="col-sm-3">
        <div class="bs-divider"><i class="fa fa-star"></i> Recommendations <i class="fa fa-star"></i></div>
        <suggestion-box></suggestion-box>
    </div>

</div>

<div class="row">
</div> 
 
  
@endsection

@section('scripts')
<script>
      $(function(){
         const app = new Vue({
            el: '#app',
            data:{
<<<<<<< HEAD
               user: {!! Auth::user() !!}
=======
<<<<<<< HEAD
                xyz: { "user":"Steve" }
=======
                abc: {"user":"Kishan"}
>>>>>>> 38b8680e5ad66f4d5ee99077a274dd252da182e1
>>>>>>> f4567d791a97e98815ae5d8ef48888d017c00097
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