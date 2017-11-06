<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>欢迎注册饱否</title>
    <meta name="description" content="这是一个 index 页面">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="{{ asset('assets/i/favicon.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('assets/i/app-icon72x72@2x.png') }}">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <link rel="stylesheet" href="{{ asset('assets/css/amazeui.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/amazeui.datatables.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>

</head>

<body data-type="login">
    <script src="{{ asset('assets/js/theme.js') }}"></script>
    <div class="am-g tpl-g">
        <div class="tpl-login">
            <div class="tpl-login-content">
                <div class="tpl-login-title">注册商家</div>
                <span class="tpl-login-content-info">
                  创建一个新的商家
              </span>
                @if (session('msg'))
                    <script>
                        alert("{{ session('msg') }}");
                    </script>
                @endif

               <!-- action="/store/dosignUp" method="post" -->
                <form class="am-form tpl-form-line-form" action="{{url('/store/dosignUp')}}" method="post">
                     {!! csrf_field() !!}
                  
                    <div class="am-form-group">
                        <input type="text" class="tpl-form-input" id="phone" placeholder="店主手机" name="tel" >
                    </div>
                    <div class="am-input-group am-input-group-sm tpl-form-border-form cl-p">
                        <input type="text" class="tpl-form-input" id="code" placeholder="验证码" onblur='CheckCode()'>
                        <span class="am-input-group-btn">
                            <button class="am-btn  am-btn-default am-btn-success tpl-table-list-field" type="button" value="获取验证码" onclick="sendCode()">获取验证码</button>
                        </span>
                    </div>
                    <p id="tishiyu" style="display:none;color:red;">验证码不正确，请重新输入</p> 

                    <div class="am-form-group">
                        <input name="pwd" type="password" class="tpl-form-input" id="user-name" placeholder="请输入密码">
                    </div>

                    <div class="am-form-group">
                        <input name="repwd" type="password" class="tpl-form-input" id="user-name" placeholder="再次输入密码">
                    </div>
                    
                    <div class="am-form-group tpl-login-remember-me">
                        <input id="remember-me" type="checkbox">
                        <label for="remember-me">
       
                        我已阅读并同意 <a href="javascript:;">《用户注册协议》</a> 
                         </label>

                    </div>
                     <div class="am-form-group">

                        <button type="submit" class="am-btn am-btn-primary  am-btn-block tpl-btn-bg-color-success  tpl-login-btn" >提交</button>

                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/amazeui.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script>
     
       function sendCode(){
        var phone = $('#phone').val();
      
            $.ajax({
                 url: '/store/sendcode',
                 method:'get',
                 async:true,
                 data:{phone:phone},
                 success:function(data){
                    if(data == 'ok'){
                        alert('验证码发送成功，请注意查收！');
                    }else{
                        alert(data);
                    }
                 },
                error:function(){
                    alert('验证码发送失败！');
                }
            });
        }

        function CheckCode(){
        var code = $('#code').val();
      
            $.ajax({
                 url: '/store/checkcode',
                 method:'get',
                 async:true,
                 data:{code:code},
                 success:function(data){
                    if(data == 'ok'){
                        $("#tishiyu").css("display","none");
                    }else{
                        $("#tishiyu").css("display","block");
                    }
                 },
                error:function(){
                    alert('验证码比对失败');
                }
            });
        }


            
</script>
</body>

</html>