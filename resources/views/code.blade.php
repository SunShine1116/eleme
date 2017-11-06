<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Laravel 5.1</div>
            </div>

            
                手机号：<input type="text" id="phone">
                <button type="button" onclick="doCode()" value="获取验证码">获取验证码</button>
          
           
        </div>
        
    </body>
     <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script>
   
    function doCode(){
        var phone = $('#phone').val();
        $.ajax({
             url:'/func',
             type:'get',
             async:true,
             data:{phone:phone},
             
             success:function(data){
                if(data == 'ok'){
                    alert('验证码发送成功，请注意查收！')
                }
             },
             error:function(){
                alert('验证码发送失败！');
             }
        });
    }
    </script>
</html>
