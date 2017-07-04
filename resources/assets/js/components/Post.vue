<template lang="html">
    
    <div class="card">
        <div class="card-content">
            <div class="pull-right">Post</div>
            <img class="card-avatar card-image" :src=profileImage> {{story.user.name }}</div>

             <div class="card-description">
                    <p class="text-danger">{{postText}}</p>
            </div>

        
            <div class="card-image">
                <img :src=imageSrc>
            </div>

            <div class="card-meta">
                <span class="pull-right">
                    <star-rating :rating=rating_value></star-rating>
                </span>
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
            },
            profileImage: function(){
                return '/userimages/'+ this.story.user.profile_image.path;
            },
            postText : function(){
                return this.story.post.text;
            },
            fistbumpId: function(){
                return 'fistbump' + this.story.id;
            },
        }
    }
</script>
<style lang="css">

</style>