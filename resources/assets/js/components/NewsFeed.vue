<template lang="html">
<div class="well col-sm-12">
    
    <div class="ui feed">
        <div class="event">
            <div class="label">
                <img src="/images/avatar/small/elliot.jpg">
            </div>
            <div class="content">
                <div class="summary">
                    <a class="user">
                        user.name
                    </a> added you as a friend
                    <div class="date">
                        {created date}
                    </div>
                </div>
                
                <div class="meta">
                    <a class="rate">
                        <i class="like icon"></i> {likes}
                    </a>
                </div>
            </div>
        </div>

        <div class="event">
            <div class="content">
                <div class="label">
                    <img src="/images/avatar/small/elliot.jpg">
                </div>
                You added Elliot Fu to the group <a>Coworkers</a>
            </div>
        </div>
    </div>

</div>

</template>


<script>
    export default{
         data() {
             events:[
                 {}
             ]
             return {
                
            }
        }
    }
</script>
<style lang="css">

</style>        