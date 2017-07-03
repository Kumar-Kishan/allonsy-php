<template lang="html">
    <div class="wrapper">
        <div class="content">
            <h1>Your Memories</h1>
                <div class="my-gallery" itemscope itemtype ="http://schema.org/ImageGallery" data-pswp-uid="1" v-for="picture in pictures">
                    <picture :picture="picture"></picture>
                </div>
        </div>
    </div>
</template>


<script>
    export default{
         data() {
             return {
                
            }
        }, created: function(){

        },
        props: ['pictures'],
        
    }
</script>
<style lang="css">

</style>