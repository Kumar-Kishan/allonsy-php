<template lang="html">
    
    <div class="card">
        <div class="card-content">
            <div class="pull-right">Review</div><img class="card-avatar card-image" src="images/avatar/big/steve.jpg"> Steve</div>
        
            <div class="card-image">
                <img src="images/wallpapers(13).png">
            </div>

            <div class="card-content">
                <span class="pull-right"><i class="fa fa-heart"></i> 17 likes </span>
                <i class="fa fa-comment"></i> 3 comments
            </div>
            <div class="card-extra card-content">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Add comment...">
                        <div class="input-group-btn">
                        <a class="btn btn-inverted btn-default"><i class="fa fa-paper-plane"></i></a>
                        </div>
                </div>
            </div>
        </div>
    </div>


</template>


<script>
    export default{
         data() {
             return {
                
            }
        },
        props: ['story']
    }
</script>
<style lang="css">

</style>