@extends('home.public.parents')
@section('content')
     <div class="main-content"> 
      <div class="content-header"> 
       <h2>修改密码</h2> 
      </div> 
      <div class="content-inner profile-changepwd"> 
       <form class="form-horizontal" method="post" id="changepwd_form"> 
        <fieldset> 
         <div class="control-group clear-fix"> 
          <label class="control-label" for=""><span class="required">*</span>原密码</label> 
          <div class="controls"> 
           <input name="user[old_password]" id="sf_guard_user_old_pwd" type="password" /> 
           <p class="help-block">(请输入现在正在使用的密码)</p> 
          </div>
          <!--end input--> 
         </div>
         <!--end clearfix--> 
         <div class="control-group"> 
          <label class="control-label" for=""><span class="required">*</span>新密码</label> 
          <div class="controls"> 
           <input name="user[new_password]" id="sf_guard_user_new_pwd" type="password" /> 
           <p class="help-block">（请输入新密码）</p> 
          </div>
          <!--end input--> 
         </div>
         <!--end clearfix--> 
         <div class="control-group clear-fix"> 
          <label class="control-label" for=""><span class="required">*</span>重复新密码</label> 
          <div class="controls"> 
           <input name="user[repeat_new_password]" id="sf_guard_user_repeat_pwd" type="password" /> 
           <p class="help-block">(请再输入一次新密码)</p> 
          </div>
          <!--end input--> 
         </div>
         <!--end clearfix--> 
         <div class="form-actions"> 
          <button type="button" class="btn btn-yellow" id="sf_guard_user_changepwd_submit">提交更改</button> 
         </div> 
        </fieldset> 
       </form> 
      </div> 
     </div> 
    </div> 
   </div> 
   <div id="site_fixed" class="site-fixed"> 
    <a id="back_top" class="btn-back-top ui_invisible" role="button" title="回顶部"><i class="icon-backtop"></i></a> 
    <div class="btn-app-qrcode"> 
     <i class="icon-qrcode"></i> 
     <img class="img-qrcode" src="images/app-qrcode.png" alt="扫描二维码免费下载手机App" /> 
    </div> 
   </div> 
@endsection