<template lang="html">
    <div class="well">
        {{suggest.place}}
        {{suggest.distance}}
    </div>
</template>


<script>
    export default{
         data() {
             return {
               
            }
        },
       props: ['suggest']

    }
</script>
<style lang="css">

</style>