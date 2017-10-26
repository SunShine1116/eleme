@extends('home.public.parentd')
@section('content')
  <div class="container"> 
   <div class="restaurant-main"> 
    <div id="fixed_placeholder" class="rst-subnav-placeholder"> 
     <div id="sub_nav" class="rst-block rst-subnav-wrapper group"> 
      <a class="rst-subnav ui_active" href="/kxljmlt-pt/rating">全部评价</a> 
     </div> 
    </div> 
    <div id="rating_wrap" class="rst-rating-wrapper"> 
     <section class="rst-rating-column rst_rating_wrap"> 
      
      <div class="rst-block rst-rating-block"> 
       <p class="rst-rating-dish"> <a class="link" href="/kxljmlt-pt#food/10766816" title="日本豆腐"> 日本豆腐 <span class="price symbol-rmb">2</span> </a> <i class="icon-d-star s10"></i> </p> 
       <p class="rst-rating-text">我的最爱</p> 
       <p class="rst-rating-info"> <span class="username">C***n</span> 2015-03-27 </p> 
      </div> 
      
     </section> 
     <p id="rst_pager" class="rst-pager"> <span class="pager_item rst-pager-item current">1</span> <a class="pager_item rst-pager-item" data-page="2">2</a> <a class="pager_item rst-pager-item" data-page="3">3</a> <a class="pager_item rst-pager-item" data-page="4">4</a> <a class="pager_item rst-pager-item" data-page="5">5</a> <a class="pager_item rst-pager-item flip glyph-caret-right" data-page="2"></a> </p> 
    </div> 
   </div> 
   <aside class="restaurant-aside"> 
    <aside class="rst-aside"> 
     <div class="rst-block rst-rating-aside group"> 
      <div class="rating-point aside" itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating"> 
       <strong class="point float-l" itemprop="ratingValue">4.4</strong> 
       <div class="detail"> 
        <span class="rating-stars"> <i class="glyph-rating-star">★</i><i class="glyph-rating-star">★</i><i class="glyph-rating-star">★</i><i class="glyph-rating-star">★</i><i class="glyph-rating-star off">★</i></span> 
        <span class="comment" href="/kxljmlt-pt/rating"><span itemprop="reviewCount">495</span>人评价</span> 
       </div> 
      </div> 
      <ul class="rating-diagram aside"> 
       <li class="diagram-item"> <span class="rating-stars"> <i class="glyph-rating-star">★</i><i class="glyph-rating-star">★</i><i class="glyph-rating-star">★</i><i class="glyph-rating-star">★</i><i class="glyph-rating-star">★</i></span> <span class="bar" style="width: 97.2px;"></span> 81% </li> 
       <li class="diagram-item"> <span class="rating-stars"> <i class="glyph-rating-star">★</i><i class="glyph-rating-star">★</i><i class="glyph-rating-star">★</i><i class="glyph-rating-star">★</i><i class="glyph-rating-star off">★</i></span> <span class="bar" style="width: 6px;"></span> 5% </li> 
       <li class="diagram-item"> <span class="rating-stars"> <i class="glyph-rating-star">★</i><i class="glyph-rating-star">★</i><i class="glyph-rating-star">★</i><i class="glyph-rating-star off">★</i><i class="glyph-rating-star off">★</i></span> <span class="bar" style="width: 2.4px;"></span> 2% </li> 
       <li class="diagram-item"> <span class="rating-stars"> <i class="glyph-rating-star">★</i><i class="glyph-rating-star">★</i><i class="glyph-rating-star off">★</i><i class="glyph-rating-star off">★</i><i class="glyph-rating-star off">★</i></span> <span class="bar" style="width: 0px;"></span> 0% </li> 
       <li class="diagram-item"> <span class="rating-stars"> <i class="glyph-rating-star">★</i><i class="glyph-rating-star off">★</i><i class="glyph-rating-star off">★</i><i class="glyph-rating-star off">★</i><i class="glyph-rating-star off">★</i></span> <span class="bar" style="width: 14.4px;"></span> 12% </li> 
      </ul> 
     </div> 
    </aside> 
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