<template lang="html">
    <div id= "suggestionbox"class="suggestion">
        <suggestion v-for="suggest in suggestions" :key="suggest.place" :suggest="suggest" ></suggestion>

    </div>
</template>


<script>
    export default{
        data() {
            return {
                "suggestions": [
                        {"place":"Bab Bazar","distance": "4 km from you"},
                        {"place":"Bab Bazar","distance": "4 km from you"},
                        {"place":"Bab Bazar","distance": "4 km from you"},
                        {"place":"Bab Bazar","distance": "4 km from you"},
                        {"place":"Bab Bazar","distance": "4 km from you"},
                        {"place":"Bab Bazar","distance": "4 km from you"},
                        {"place":"Bab Bazar","distance": "4 km from you"},
                        {"place":"Bab Bazar","distance": "4 km from you"}   
                ]            
            }
        
        }, created: function(){
            // window.addEventListener("scroll", function(){
            //     var cover = document.getElementById('suggestionbox');
            //     var visibleHeight = cover.offsetHeight;
            //     var pixelScrolled = cover.scrollTop; 
            //     var y = visibleHeight + pixelScrolled;
                
            //     console.log(cover.offsetHeight+ ""+cover.scrollTop );
                


            //     console.log(y + " " + pixelScrolled);

            //     if( y == cover.scrollHeight)  
            //     {
            //         console.log('end');
            //     }

            //     else {
            //         console.log('milena');
            //     }
            // });
            
    }
}
    
</script>
<style lang="css">

</style>