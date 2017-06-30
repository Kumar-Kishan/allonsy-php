<template lang="html">
    <div class="suggestion">
        <suggestion v-for="suggest in suggestions" :key="suggest.name" :suggest="suggest" ></suggestion>

    </div>
</template>


<script>
    export default{
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
                
                
            }
        
        }
    }
</script>
<style lang="css">

</style>