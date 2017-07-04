<template lang="html">
    <div class="star-rating">
        <canvas class="myCanvas" ref="canvas" id="star-canvas" @mouseover="mouseover" width="200px" height="50px"></canvas>
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
            //this.selectedRating = this.rating;
            this.selectedRating = Math.random() * (5 - 1) + 1;
        },
        mounted: function(){
            this.drawStars(this.selectedRating);
        },
        methods:{
            mouseover: function(event){
                console.log(event);
            },
            drawStars: function(numberOfStars){
                var context = this.$refs.canvas.getContext('2d');
                for(var i=1;i<6;i++){
                    var offset = (i - 1) * 40;                    
                    if(numberOfStars < i) {
                        this.drawStar(context,offset + 20,25,6,7,12,false);
                        console.log(i + 'Not Colored');
                    }else{
                        this.drawStar(context,offset + 20,25,6,7,12,true);
                        //this.drawStar(context,i,true);
                        console.log(i + 'Colored');
                    }                
                }
            },
            drawStar: function (ctx,cx,cy,spikes,outerRadius,innerRadius,selected){
                var rot=Math.PI/2*3;
                var x=cx;
                var y=cy;
                var step=Math.PI/spikes;

                ctx.beginPath();
                ctx.moveTo(cx,cy-outerRadius)
                for(var i=0;i<spikes;i++){
                    x=cx+Math.cos(rot)*outerRadius;
                    y=cy+Math.sin(rot)*outerRadius;
                    ctx.lineTo(x,y)
                    rot+=step

                    x=cx+Math.cos(rot)*innerRadius;
                    y=cy+Math.sin(rot)*innerRadius;
                    ctx.lineTo(x,y)
                    rot+=step
                }
                ctx.lineTo(cx,cy-outerRadius);
                ctx.closePath();
                ctx.lineWidth=5;
                ctx.strokeStyle='blue';
                ctx.stroke();
                ctx.fillStyle= selected ? 'skyblue': 'white';
                ctx.fill();
                }
            // drawStar: function(context,i,selected){
            //     var offset = (i - 1) * 40;
              
            //     context.beginPath();
            //     context.arc(offset + 20, 25, 10, 0, 2 * Math.PI, false);
            //     if(selected){
            //          context.fillStyle = 'green';
            //     }else{
            //         context.fillStyle = 'white';
            //     }
            //     context.fill();
            //     context.lineWidth = 5;
            //     context.strokeStyle = '#003300';
            //     context.stroke();
            //     context.fill();
            // }
        }
    }
</script>
<style lang="css">
</style>