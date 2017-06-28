<template lang="html">
    <div class="card">
        <div class="card-content">
            <div class="pull-right">14h</div><img class="card-avatar card-image" src="images/avatar/big/steve.jpg">{{post.user}}</div>
        <div class="card-image">
            <img src="images/earth.jpg">
        </div>
        <div class="card-content">
            <span class="pull-right"><i class="fa fa-heart"></i> {{likes}} likes </span>
            <i class="fa fa-comment"></i> {{comments}} comments
        </div>
        <div class="card-extra card-co ntent">
            <div class="input-group">
            <input class="form-control" type="text" placeholder="Add comment...">
            <div class="input-group-btn">
                <a class="btn btn-inverted btn-default" @click="likes=likes+1"><i class="fa fa-paper-plane"></i></a>
            </div>
            </div>
        </div>
    </div>
</template>


<script>
    export default{
         data() {
             return {
                likes: 0,
                comments: 0
            }
        },
        props:['post'],
        methods:{
            addComment: function(event){
                this.likes +=1;
            }
        }
    }
</script>
<style lang="css">

</style>