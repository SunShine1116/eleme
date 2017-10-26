@extends('home.public.parents')
@section('content')
     <div class="main-content"> 
      <div class="content-header"> 
       <h2>安全设置</h2> 
      </div> 
      <div class="content-inner"> 
       <div class="alert">
         饿了么已经开放在线支付功能，将通过手机和邮箱作为你的安全保障。为了保障你的账户安全，请及时完成绑定操作。 
       </div> 
       <p class="gray-box"> <span class="bold">安全等级：</span> <a class="user-safety-level full" href="member_safe_set.html" title="太棒了，您已达到最高安全等级"> 高 </a> </p> 
       <table class="security-settings-wrapper"> 
        <colgroup> 
         <col width="130" /> 
         <col /> 
         <col width="110" /> 
        </colgroup> 
        <tbody> 
         <tr>
          <th>手机验证 <i class="icon-check"></i></th> 
          <td> 
           <div class="info"> 
            <p>您的手机已验证：180****1538</p> 
            <p class="sub-info">验证后可以使用在线充值并更改支付额度，接收账户提醒信息。</p> 
            <p id="tool-kit-step4">在线支付已经可以使用 <a href="member_charge.html">去充值</a></p> 
           </div> </td> 
          <td> <a href="/profile/unbind_mobile">解除绑定</a> </td> 
         </tr> 
         <tr> 
          <th>邮箱激活 <i class="icon-check"></i></th> 
          <td> 
           <div class="info"> 
            <p>已绑定邮箱： 41614****@qq.com</p> 
            <p class="sub-info">验证可用于快速找回登录密码，接收账户提醒邮件提醒。</p> 
           </div> </td> 
          <td><a href="/profile/validate_former_email">更换邮箱</a> </td> 
         </tr> 
         <tr> 
          <th>支付额度 <i class="icon-check"></i></th> 
          <td> 
           <div class="info"> 
            <p class="limit">50 元</p> 
            <p class="sub-info">如果当日在线订餐金额超出支付额度，手机验证后才可以付款。</p> 
           </div> </td> 
          <td><a href="/profile/modify_payment_quota_step1">更改额度</a></td> 
         </tr> 
        </tbody> 
       </table> 
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