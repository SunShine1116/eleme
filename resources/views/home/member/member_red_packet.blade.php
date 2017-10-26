@extends('home.public.parents')
@section('content')
     <div class="main-content"> 
      <div class="content-header"> 
       <h2>我的红包</h2> 
       <button class="btn btn-yellow" onclick="$('#modal_exchange_hongbao').modal({backdrop:'static'});">兑换红包</button> 
      </div> 
      <div class="content-inner profile-hongbao"> 
       <nav id="hongbao_nav" class="hongbao-nav"> 
        <a class="nav active" data-categ="unused">未使用的红包</a> 
        <a class="nav" data-categ="used">已使用的红包</a> 
        <a class="nav" data-categ="expired">已过期的红包</a> 
       </nav> 
       <div id="hongbao_panel"> 
        <p id="unused" class="hongbao-empty">没有未使用红包</p> 
        <p id="used" class="hongbao-empty hide">没有已使用红包</p> 
        <p id="expired" class="hongbao-empty hide">没有过期红包</p> 
       </div> 
      </div> 
     </div> 
    </div> 
    <div id="modal_exchange_hongbao" class="modal hide fade" aria-hidden="true" tabindex="-1"> 
     <div class="modal-header"> 
      <a class="close" aria-hidden="true">&times;</a> 
      <h2>兑换红包</h2> 
     </div> 
     <div class="modal-body"> 
      <div class="hongbao-exchange-form"> 
       <div id="hongbao_exchange_error" class="alert" style="display: none"></div> 
       <p> <input id="hongbao_exchange_code" name="hongbao_exchange_code" type="text" placeholder="请输入兑换码" /> </p> 
       <p> <input id="hongbao_exchange_captcha" name="captcha" type="text" placeholder="请输入验证码" /> <input id="hongbao_exchange_csrf" type="hidden" value="c795810a05951df2e6ebf0a09437311bf979268f" /> <a><img id="exchange_captcha_img" src="/profile/hongbaoCaptcha" onclick="this.src='/profile/hongbaoCaptcha?r=' + Math.random()" /></a> <button id="hongbao_exchange_btn" type="button" class="btn btn-yellow float-r">确定</button> </p> 
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