<template lang="html">
   
    <div class="card" id="abc">
        <div class="card-image">
            <img src="images/avatar/big/elliot.jpg">
        </div>

        <div class="card-content">
            <a class="card-header">name</a>
        </div>            

    </div>
        
</template>


<script>
    export default{
         data() {
             return {
                
            }
        },
            props:['user']
    }
</script>
<style lang="css">
.abc{
    padding top: 70px;
}

</style>