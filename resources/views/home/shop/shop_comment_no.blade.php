@extends('home.public.parentd')
@section('content')
 
  <div class="container"> 
   <div id="rst_cmt" class="restaurant-main"> 
    <p class="rst-block rst-empty-info">本餐厅不支持在线留言，如有问题请联系饿了么客服：400 055 7117</p> 
   </div> 
   <aside class="restaurant-aside"> 
    <section class="rst-block restaurant-board"> 
     <h3 class="rst-aside-title">餐厅公告</h3> 
     <p class="rst-notice-board"><i class="icon-rst-notice"></i>全年无休</p> 
     <p class="rst-deliver-detail"> <i class="icon-rst-deliver"></i>起送价<span class="rst_deliver_amount"></span>元。 </p> 
     <ul class="rst-badge-list"> 
      <li class="rst-badge-item"> <i class="icon-rst-badge v v-person"></i> 该商家已通过个人身份认证 </li> 
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
  
  @endsection