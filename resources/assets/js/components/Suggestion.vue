<template lang="html">
    <div class="well">
        <p>
            <a :href=suggest.url>
                {{suggest.name}}
            </a>
        </p>
        {{suggest.string}}
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