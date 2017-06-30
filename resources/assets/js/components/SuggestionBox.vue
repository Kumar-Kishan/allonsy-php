<template lang="html">
<<<<<<< HEAD
    <div class="suggestion">
        <suggestion v-for="suggest in suggestions" :key="suggest.name" :suggest="suggest" ></suggestion>
=======
    <div id= "suggestionbox"class="suggestion">
        <suggestion v-for="suggest in suggestions" :key="suggest.place" :suggest="suggest" ></suggestion>
>>>>>>> d3281b1cb00596b64932d2e4085f8d2fb605f0ee

    </div>
</template>


<script>
    export default{
<<<<<<< HEAD
         data() {
             return {
                 "suggestions":  [
    {"name":"Bab Bazar","string": "4 km from you","url":"https:\/\/google.com"},
    {"name":"Bab Bazar","string": "4 km from you","url":"https:\/\/google.com"},
    {"name":"Bab Bazar","string": "4 km from you","url":"https:\/\/google.com"},
    {"name":"Bab Bazar","string": "4 km from you","url":"https:\/\/google.com"},
    {"name":"Bab Bazar","string": "4 km from you","url":"https:\/\/google.com"},
    {"name":"Bab Bazar","string": "4 km from you","url":"https:\/\/google.com"},
    {"name":"Bab Bazar","string": "4 km from you","url":"https:\/\/google.com"},
    {"name":"Bab Bazar","string": "4 km from you","url":"https:\/\/google.com"},   
]
                
                
=======
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
>>>>>>> d3281b1cb00596b64932d2e4085f8d2fb605f0ee
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