<template lang="html">
    <div class="star-rating">
        <canvas class="myCanvas" ref="canvas" id="star-canvas" width="200px" height="50px"></canvas>
    </div>
</template>


<script>
    export default{
         data() {
             return {
                selectedRating : 0
            }
        },
        props: ['rating'],
        created: function(){
            this.selectedRating = this.rating;
        },
        mounted: function(){
            this.drawStars(this.rating);
        },
        methods:{
            drawStars: function(numberOfStars){
                var context = this.$refs.canvas.getContext('2d');
                for(var i=1;i<6;i++){
                    if(numberOfStars < i) {
                        this.drawStar(context,i,false);
                        //console.log(i + 'Not Colored');
                    }else{
                        this.drawStar(context,i,true);
                        //console.log(i + 'Colored');
                    }                
                }
            },
            drawStar: function(context,i,selected){
                var offset = (i - 1) * 40;
                context.arc(offset + 20, 25, 10, 0, 2 * Math.PI, false);
               
                if(selected){
                     context.fillStyle = 'green';
                }else{
                    context.fillStyle = 'white';
                }
                context.fill();
            }
        }
    }
</script>
<style lang="css">
</style>