<template lang="html">
    <div class="well">
        <p>{{suggest.place}}</p>
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