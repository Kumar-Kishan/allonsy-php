<template lang="html">
<div class="well">
    
    <div class="ui feed">
        <div class="event">
            <div class="label">
                <img src="/images/avatar/small/elliot.jpg">
            </div>
            <div class="content">
                <div class="summary">
                    <a class="user">
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
             
             return {
                current_page:1,
                stories:"",
                next_page:2,
                next_page_url:""

            }
        }
    }
</script>
<style lang="css">

</style>        