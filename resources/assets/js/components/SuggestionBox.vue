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
           
            
    }
}
    
</script>
<style lang="css">

</style>