<template lang="html">
    <form  class="form-horizontal ng-pristine ng-valid storyForm" method="POST" action="/post">
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
                    <textarea class="form-control" rows="4" id="textArea" :placeholder=type.text></textarea>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-2">
                    <a href="javascript:;" class="btn btn-inverted btn-bold btn-danger" id="imgupload"><i class="fa fa-photo btn-icon-left"></i>Photo/Video</a>
                </div>
            </div>

            <div class="form-group">
                <div class="col-lg-2 col-lg-offset-10">
                    <button type="submit" class="btn btn-inverted btn-bold btn-danger" style="float:right">{{ type.name}}</button>  
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
                
            }
        },
        props: ['preference', 'type'],
        created: function(){
          
        }

    }
</script>
<style lang="css">
    #imgupload{
        padding: 5px;
        float: left;
    }
</style>