<template lang="html">
    
    <div class="card">
            <div class="card-content">
                <div class="pull-right">Review</div>
                <img class="card-avatar card-image" :src=profileImage>{{story.user.name}}
            </div>
        
            <div class="card-description">
                    <p class="text-danger">{{reviewText}}</p>
            </div>

            <div class="card-image">
                 <img :src=imageSrc />
            </div>

            
          <div class="card-meta">
            <span class="pull-right">
                <star-rating :rating=rating_value></star-rating>
            </span>
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


</template>


<script>
    export default{
         data() {
            return {
                rating_value : 2
            }
        },computed: {
            imageSrc:  function(){
                return 'images/'+  this.story.review.media.path;
            },
            reviewText : function(){
                return this.story.review.text;
            },
            ratingId: function(){
                return 'rating' + this.story.id;
            },
            profileImage: function(){
                return '/userimages/'+ this.story.user.profile_image.path;
            }
            
        },
        props: ['story'],
        created: function(){
            var instance = this;
         
            // $('#' + instance.ratingId).on('rating.hoverleave', function(event, target) {
            //     console.log(event);
            //     console.log($('#' + instance.ratingId).val());
            //
            
            //  if(instance.user.media_id != null)
            //  axios.get('/media/'+ instance.user.media_id).then(function(response){
            //      $('#profileImage').attr('src','/userimages/' + response.data.path);
            //  }); 


           
        }
    }
</script>
<style lang="css">


</style>