<template lang="html">
    <div class="container col-md-12">
        <ul class="nav nav-tabs tabs-material">
            <li class="active"><a href="#post" data-toggle="tab" aria-expanded="true">Post</a></li>
            <li class=""><a href="#review" data-toggle="tab" aria-expanded="false">Review</a></li>
        </ul>
    
        <div class="tab-content">
            <div class="tab-pane fade active in" id="post">
                <form-component :type="post"></form-component>
            </div>
            <div class="tab-pane fade" id="review">
                 <form-component :type="review" ></form-component>
            </div>
        </div>

    </div>
    
</template>


<script>
    export default{
         data() {
             return {
                post: {"show" : "false" , "name": "Post", "text": "Hey there! Post about your trip here" },
                review: {"show": "true", "name": "Review", "text": "Hey there! Review about a place" }
             }
        },
        props: ['preference']
    }
</script>
<style lang="css">

textarea{

    resize: none;

}
</style>