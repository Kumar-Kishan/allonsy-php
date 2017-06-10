<template lang="html">
<div class="container-fluid">
    <form class="form-horizontal ng-pristine ng-valid">
        <fieldset>
        <legend> Create a Post/Review</legend>

            <div class="form-group">
                <textarea class="form-control" rows="4" id="textArea" placeholder="Hey there! Review a place or post about your trip here "></textarea>
            </div>

            
                 <div class="btn-group btn-divided"id="btn">
                  <a href="javascript:;" class="btn btn-inverted btn-bold btn-danger">Post<i data-text="or"></i></a>
                  <a href="javascript:;" class="btn btn-inverted btn-bold btn-danger">Review</i></a>
                  </div>
            

        </fieldset>
    </form>
</div>
</template>


<script>
    export default{
         data() {
             return {
                
            }
        }
    }
</script>
<style lang="css">
.btn-group{
    float:right;
}
textarea{

    resize: none;

}
</style>