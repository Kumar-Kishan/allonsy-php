<template lang="html">
    <div class="star-rating">
        <canvas class="myCanvas" id="star-canvas" width="200px" height="50px"></canvas>
    </div>
</template>


<script>
    export default{
         data() {
             return {
                
            }
        },
        created: function(){
            var canvas = this.$el.findElementById(star-canvas);
            console.log(canvas);
        }
    }
</script>
<style lang="css">

</style>