<template lang="html">
    <form  class="form-horizontal ng-pristine ng-valid storyForm">
        <fieldset>
            <div class="form-group">
                <label for="select" class="col-lg-2 control-label">Category:</label>
                <div class="col-lg-10">
                    <select class="form-control" id="select">
                        <option value="1">Food</option>
                        <option value="2">Entertainment</option>
                        <option value="3">Chill</option>
                        <option value="4">Thrill</option>
                        <option value="5">Pilgrimage</option>
                        <option value="6">Trek</option>
                    </select>
                </div>
            </div>

            <div class="form-group" v-if="type.show === 'true'">
                <div class="ui-widget">
                <div class="col-lg-2">
                    <label for="tags">Location:</label>
                 </div>
                <div class="col-lg-6">
                    <input id="tags">
                </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-lg-12">
                    <textarea class="form-control" rows="4" id="textArea" :placeholder=type.text v-model="inputText"></textarea>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-2">
                    <a href="javascript:;" class="btn btn-inverted btn-bold btn-danger" id="imgupload"><i class="fa fa-photo btn-icon-left"></i>Photo/Video</a>
                </div>
            </div>

            <div class="form-group">
                <div class="col-lg-2 col-lg-offset-10">
                    <a href="#" class="btn btn-inverted btn-bold btn-danger" style="float:right" v-on:click="post">{{type.name}}</a>  
                </div>
            </div>
                  
            </div>
        </fieldset>

    </form>    
</template>


<script>
    export default{
         data() {
             return {
                 inputText: ""
            }
        },
        props: ['preference', 'type'],
        methods: {
            post: function(event){
                var postType = "Post";
                if(this.type != null){
                    postType = this.type.name;
                }
                console.log(this.inputText);
                axios.post('/post', {
                    text: this.inputText
                }).then(function (response){
                    console.log(response)

                }).catch(function(error){
                    console.log(error);
                });
            }
        }    
        
    }
</script>
<style lang="css">
    #imgupload{
        padding: 5px;
        float: left;
    }
</style>