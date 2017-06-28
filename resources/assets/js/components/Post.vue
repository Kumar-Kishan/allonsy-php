<template lang="html">
    
    <div class="card">
        <div class="card-content">
            <div class="pull-right">Post</div><img class="card-avatar card-image" src="images/avatar/big/steve.jpg"> Steve</div>
        
            <div class="card-image">
                <img :src=imageSrc>
            </div>

            <div class="card-content">
                <span class="pull-right"><i class="fa fa-heart"></i> 17 likes </span>
                <i class="fa fa-comment"></i> 
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
        props: ['story'],
        created: function(){
          
        },computed: {
            imageSrc:  function(){
                return 'images/'+  this.story.post.media.path;
            }

        }
    }
</script>
<style lang="css">

</style>