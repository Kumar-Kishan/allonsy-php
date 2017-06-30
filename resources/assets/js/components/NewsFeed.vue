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
        data(){
             
             return {
                current_page:1,
                stories:"",
                next_page_url:"",
                next_page_called : false

            }
        },
        props: ['url'],
        created: function(){
            var random = Math.random();
            var instance = this;
            var url = this.url;
            axios.get(url + random).then(function(response){
                instance.current_page = response.data.current_page;
                instance.stories = response.data.data;
                instance.next_page_url = response.data.next_page_url;
            });

            window.addEventListener("scroll", function(){
                var wrap = document.getElementById('newsfeed');
                var contentHeight = wrap.offsetHeight;
                var yOffset = window.pageYOffset; 
                var y = yOffset + window.innerHeight;

                //console.log(y + '  '+ contentHeight);
                if(y >= contentHeight / 1.25 )
                {
                    
                    //load new content
                    //wrap.innerHTML = wrap.innerHTML + "next_page_url";
                    console.log('load new content');
                    if(instance.next_page_called == false)
                    {
                        instance.next_page_called = true;
                        axios.get(instance.next_page_url).then(function(response){
                        
                        if(response.data.data.length == 0)
                        {
                            console.log('No More Stories');
                        }
                        
                        _.each(response.data.data,function(story){
                            instance.stories.push(story);
                        });
                        instance.current_page = response.data.current_page;
                        instance.next_page_url = response.data.next_page_url;
                        instance.next_page_called = false;                        
                        console.log(instance.stories);
                    });

                    }
                    

                }
            })
        }
    }
    

</script>
<style lang="css">

</style>        