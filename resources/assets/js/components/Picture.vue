<template lang="html">

    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">

        <a :href=imgSrc itemprop="contentUrl" data-size="1024x1024">
            <img :src=imgSrc itemprop="thumbnail" alt="Image description" />
            
        </a>
        <figcaption itemprop="caption description"></figcaption>

    </figure>
        
</template>


<script>
    export default{
         data() {
             return {
                
            }
        },
        computed: {
            imgSrc: function(){
                return "/images/"+this.image.path;
            }
        }
    }
</script>
<style lang="css">

</style>