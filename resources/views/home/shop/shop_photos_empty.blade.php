@extends('home.public.parentd')
@section('content')
  <div class="container rst-block photo-wall-empty"> 
   <div class="photo-guide-wrapper group"> 
    <p class="photo-guide-caption">暂无照片哦，用「饿了么手机应用」上传照片吧！</p> 
    <div class="photo-guide"> 
     <img src="images/photo-guide.1c780890.png" alt="流程" /> 
     <ol class="photo-guide-flow group"> 
      <li class="step step1">下单收到外卖打开手机应用</li> 
      <li class="step step2">用「美食相机」拍照<span class="highlight">赚20积分</span></li> 
     </ol> 
    </div> 
    <div class="photo-guide-qr"> 
     <img src="images/app-qrcode.20cdda49.png" alt="http://m.ele.me/dapp" /> 
    </div> 
   </div> 
  </div> 
  <div id="modal_iLogin" class="bs-modal fade ilogin-modal" tabindex="-1" role="dialog" aria-hidden="true"> 
   <div class="bs-modal-dialog"> 
    <div class="bs-modal-content"> 
     <div class="bs-modal-body"> 
      <a class="bs-close" data-dismiss="bs-modal" aria-hidden="true">&times;</a> 
      <iframe class="ilogin-iframe login_frame" src="" frameborder="0" scrolling="no"></iframe> 
     </div> 
    </div> 
   </div> 
  </div> 
  <div id="mod_fixed" class="global-mod-fixed"> 
   <a id="back_top" class="btn-back-top ui_invisible" role="button" title="回顶部"><i class="icon-backtop"></i></a> 
   <div class="btn-app-qrcode"> 
    <i class="icon-qrcode"></i> 
    <img class="img-qrcode" src="images/app-qrcode.20cdda49.png" alt="扫描二维码免费下载手机App" /> 
   </div> 
   <a class="btn-site-feedback" href="http://kaidian.ele.me" target="_blank">我要开店</a> 
   <a class="btn-site-feedback" href="help.html" target="_blank">热门问题</a> 
   <!-- Live800在线客服图标:在线客服[文本图标] 开始--> 
   <div style="display:none;">
    <a href="http://www.live800.com">在线聊天</a>
   </div> 
   <script language="javascript" src="js/textButton.js?jid=1820947377&amp;companyID=402791&amp;configID=123801&amp;codeType=custom"></script> 
   <!-- 在线客服图标:在线客服 结束--> 
  </div> 
  @endsection