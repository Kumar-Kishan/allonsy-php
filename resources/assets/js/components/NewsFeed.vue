<template lang="html">
    <div id="newsfeed">
    
        <div class="story" v-for="story in stories">
            <post v-if="story.type =='posts'" :story="story"></post>
            <review v-else :story="story"></review>
        </div>
    
    </div>
</template>


<script>
    export default{
         data() {
             
             return {
                current_page:1,
                stories:"",
                next_page_url:""

            }
        },
        created: function(){
            var random = Math.random();
            var instance = this;
            axios.get('/feeds/'+random).then(function(response){
                instance.current_page = response.data.current_page;
                instance.stories = response.data.data;
                instance.next_page_url = response.data.next_page_url;
            });
        }
    }
</script>
<style lang="css">

</style>        