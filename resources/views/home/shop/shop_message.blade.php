@extends('home.public.parentd')
@section('content') 
  <div class="container"> 
   <div id="rst_cmt" class="restaurant-main"> 
    <div id="fixed_placeholder" class="rst-subnav-placeholder"> 
     <div id="sub_nav" class="rst-block rst-subnav-wrapper group"> 
      <div class="float-l"> 
       <a class="rst-subnav ui_active" href="/zb-eamonn/comment">全部留言</a> 
      </div> 
      <a class="rst-subnav rst-comment-btn" data-toggle="bs-modal" data-target="#modal_comment" data-keyboard="false"><span class="plus">+</span>发表留言</a> 
     </div> 
    </div> 
    <div class="rst-block"> 
     <section class="rst_msg_wrap"> 
      
      <div class="rst-comment-wrapper"> 
       <div class="rst-comment group"> 
        <img class="user-avatar" src="images/d1da73d2091789a989523fbf46c11jpeg.jpeg" alt="guest" /> 
        <div class="user-comment"> 
         <p class="rst-comment-info"><span class="name">guest</span>2015-03-27 13:23:06</p> 
         <p class="rst-comment-content">【催单】饿单号：12467114228653679，饿单内容：茄汁猪扒蛋包饭1份/牛奶蘑菇鸡茸浓汤1份， 我的饿单麻烦快一点！谢谢。再不来我就饿死了……</p> 
        </div> 
       </div> 
       <div class="rst-reply-wrapper"> 
        <div class="rst-reply group"> 
         <img class="manager-avatar" src="images/de50ebccb6e9af47a2906841e94e4jpeg.jpeg" alt="A梦餐厅Eamonn's" /> 
         <div class="manager-comment"> 
          <p class="rst-comment-info"><span class="name">餐厅回复</span>2015-03-27 13:23:35</p> 
          <p class="rst-comment-content">您好，您的外卖已经送出去了，应该马上就能到，请耐心再等等</p> 
         </div> 
        </div> 
       </div> 
      </div> 
      
     </section> 
     <p id="rst_pager" class="rst-pager"> <span class="pager_item rst-pager-item current">1</span> <a class="pager_item rst-pager-item" data-page="2">2</a> <a class="pager_item rst-pager-item" data-page="3">3</a> <a class="pager_item rst-pager-item" data-page="4">4</a> <a class="pager_item rst-pager-item" data-page="5">5</a> <a class="pager_item rst-pager-item flip glyph-caret-right" data-page="2"></a> </p> 
    </div> 
    <div id="modal_comment" class="bs-modal fade" tabindex="-1" role="dialog" aria-hidden="true"> 
     <div class="bs-modal-dialog rst-comment-modal"> 
      <div class="bs-modal-content"> 
       <div class="bs-modal-header pb0"> 
        <h4 class="bs-modal-title">发表留言</h4> 
        <a class="bs-close" data-dismiss="bs-modal" aria-hidden="true">&times;</a> 
       </div> 
       <div class="bs-modal-body"> 
        <form class="mt10 rst-comment-form msg_form"> 
         <p class="ui-alert error hide err_tip mb10"></p> 
         <textarea id="msg_textarea" class="rst-comment-textarea mt10" name="content" placeholder="写下你的留言…"></textarea> 
         <p class="clear-margin"> <input id="captcha_input" type="text" name="captcha" maxlength="4" placeholder="输入验证码" autocomplete="off" /> <img id="captcha_img" class="rst-comment-captcha" src="//v5.ele.me/captcha?action=comment" alt="captcha" /> <button class="ui-btn btn-confirm float-r" type="submit">发表留言</button> </p> 
        </form> 
       </div> 
      </div> 
     </div> 
    </div> 
   </div> 
   <aside class="restaurant-aside"> 
    <section class="rst-block restaurant-board"> 
     <h3 class="rst-aside-title">餐厅公告</h3> 
     <p class="rst-notice-board"><i class="icon-rst-notice"></i>A梦餐廳Eamonn's(闸北店)共和新路480号，晚市及夜宵堂吃爆款优惠活动，每桌满88元，即可享受7款1元超值特价，干锅牛蛙1元，红烧长江鮰鱼1元，咸蛋黄排条1元，茶树菇炒牛肉1元，韩式辣炒八爪鱼1元，蟹粉豆腐1元，红烧带鱼1元，本餐厅所有食物为下单后现做，热炒，新鲜食材，小锅菜，为保证最高品质的菜肴和送餐速度，中午用餐的顾客请提前1个小时预定订单，谢谢！本餐厅外卖保温采用顶级pvc内胆隔源储温技术，保证热气腾腾的食物！！！</p> 
     <p class="rst-deliver-detail"> <i class="icon-rst-deliver"></i>起送价<span class="rst_deliver_amount"></span>元。 （浦东150元起送） </p> 
     <ul class="rst-badge-list"> 
      <li class="rst-badge-item"> <i class="icon-rst-badge v v-company"></i> 该商家已通过企业营业资质认证 </li> 
      <li class="rst-badge-item"> <i class="icon-rst-badge v v-license"></i> 该商家已通过<a href="images/6166e11ea6b75dd5d31e787a828ccjpeg.jpeg" class="v-license-href">营业执照认证
        <div class="rst-license-img">
         <img src="images/6166e11ea6b75dd5d31e787a828ccjpeg.jpeg" />
        </div></a> </li> 
      <li class="rst-badge-item"> <i class="icon-rst-badge v v-license"></i> 该商家已通过<a href="images/7f75153c1d89cf2176405125a92b6jpeg.jpeg" class="v-license-href">服务许可认证
        <div class="rst-license-img">
         <img src="images/7f75153c1d89cf2176405125a92b6jpeg.jpeg" />
        </div></a> </li> 
      <li class="rst-badge-item"><i class="icon-rst-badge online-payment"></i>该餐厅支持在线支付</li> 
      <li class="rst-badge-item"><i class="icon-rst-badge invoice"></i>该餐厅支持开发票，开票订单金额70元起，请在下单时填写好发票抬头</li> 
     </ul> 
    </section> 
   </aside> 
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