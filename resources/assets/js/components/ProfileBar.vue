<template lang="html">
   
    <div class="card" id="abc">
        <div class="card-image">
            <a id="button" href="#" class="btn btn-circular btn-danger" @click="imgupload" style="display:none"><i class="fa fa-photo"></i></a>


            <img @mouseover=inFocus @mouseleave=lostFocus id="profileImage" src="images/avatar/big/steve.jpg" />

        </div>

        <div class="card-content">
            <div class="text-center">
            <a class="card-header">{{user.name}}</a>
            </div>
        </div>            

    </div>
        
</template>


<script>
    export default{
         data() {
             return {
                
            }
        },
        props :['user'],
         methods: {
            inFocus: function(event){
                $('#button').show();
            },
            lostFocus: function(event){
                $('#button').hide();
            },
            imgupload: function(event){
                var instance = this;
                $("#imginput").click();
                $('input#imginput').change(function(){

                    var formData =new FormData($('#imageInput')[0]);

                    formData.append('inputImage',$('input[type=file]')[0].files[0]);
                    formData.append('_token', window.Laravel.csrfToken);
                    $.ajax({
                        url:'/profileImage',
                        type:'POST',
                        data: formData,
                        processData: false,
                        contentType: false,
                        success:function(data){
                            console.log(data);
                            instance.imageId = data.id;

                            $('#profileImage').attr('src','/userimages/' + data.path);
                        },
                        error:function(error){
                            console.log(error);
                        }
                    });
                });
            } 
    
        },
        props:['user']
    }
</script>
<style lang="css">
.card-image{    
    display:inline-block;
    position: relative;
}
.card-image a{
    margin-top:10px;
    margin-left: 10px;
    position: absolute;
}
.img{
    height: 100px;
    width: 100px;
}


</style>