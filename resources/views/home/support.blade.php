@extends('home.public.parent')
@section('content') 
   <div class="container"> 
    <div class="support"> 
     <div class="support-body"> 
      <div class="self-service support-sub-content"> 
       <h3>自助服务</h3> 
       <ul class="clearfix"> 
        <li> <a href="#reminder-modal" role="button" class="reminder icon" data-toggle="modal"></a> <p>我要催单</p> </li> 
        <li> <a href="#cancel-modal" role="button" class="cancel icon" data-toggle="modal"></a> <p>取消订单</p> </li> 
        <li> <a href="#drawback-modal" role="button" class="drawback icon" data-toggle="modal"></a> <p>申请退款</p> </li> 
        <li> <a href="#complaint-modal" role="button" class="complaint icon" data-toggle="modal"></a> <p>投诉举报</p> </li> 
       </ul> 
       <!-- modal --> 
       <!-- 我要催单 --> 
       <div id="reminder-modal" class="modal hide fade support-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> 
        <div class="modal-header"> 
         <a href="#" class="close" data-dismiss="modal" aria-hidden="true">&times;</a> 
         <h3>我要催单</h3> 
        </div> 
        <div class="modal-body"> 
         <img src="{{ asset('home/images/course01.png') }}" alt="我要催单教程图" /> 
         <p>我的饿单 &gt; 饿单中心 &gt; 最近一个月的饿单，点击「我要催单」按钮就能催单啦。</p> 
         <a class="btn" href="member_order.html" target="_blank">好的，去催单</a> 
        </div> 
       </div> 
       <!-- 取消订单 --> 
       <div id="cancel-modal" class="modal hide fade support-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> 
        <div class="modal-header"> 
         <a href="#" class="close" data-dismiss="modal" aria-hidden="true">&times;</a> 
         <h3>取消订单</h3> 
        </div> 
        <div class="modal-body"> 
         <img src="{{ asset('home/images/course02.png') }}" alt="取消订单教程图" /> 
         <p>我的饿单 &gt; 饿单中心 &gt; 最近一个月的饿单，餐厅未确认订单前可「取消订单」。</p> 
         <a class="btn" href="member_order.html" target="_blank">好，立即取消订单</a> 
        </div> 
       </div> 
       <!-- 申请退款 --> 
       <div id="drawback-modal" class="modal hide fade support-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> 
        <div class="modal-header"> 
         <a href="#" class="close" data-dismiss="modal" aria-hidden="true">&times;</a> 
         <h3>申请退款</h3> 
        </div> 
        <div class="modal-body"> 
         <img src="{{ asset('home/images/course03.png') }}" alt="取消订单教程图" /> 
         <p>我的饿单 &gt; 饿单中心 &gt; 最近一个月的饿单，在线支付订单，付款1小时后可「申请退款」。</p> 
         <a class="btn" href="member_order.html" target="_blank">好，立即申请退款</a> 
        </div> 
       </div> 
       <!-- 投诉举报 --> 
       <div id="complaint-modal" class="modal hide fade support-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> 
        <div class="modal-header"> 
         <a href="#" class="close" data-dismiss="modal" aria-hidden="true">&times;</a> 
         <h3>投诉举报</h3> 
        </div> 
        <div class="modal-body"> 
         <img src="{{ asset('home/images/course04.png') }}" alt="取消订单教程图" /> 
         <p>我的饿单 &gt; 饿单中心 &gt; 「投诉举报」该商家的问题。</p> 
         <a class="btn" href="member_order.html" target="_blank">好的，去投诉</a> 
        </div> 
       </div> 
      </div> 
      <div class="normal-problem support-sub-content"> 
       <h3>常见问题</h3> 
       <ul class="problem-type clearfix"> 
        <li class="payment"> <a href="help.html/payment" target="_blank"> <i class="icon"></i> 订餐支付 </a> </li> 
        <li class="reminder"> <a href="help.html/hasten" target="_blank"> <i class="icon"></i> 催单配送 </a> </li> 
        <li class="sale"> <a href="help.html/aftersales" target="_blank"> <i class="icon"></i> 售后服务 </a> </li> 
        <li class="rule"> <a href="help.html/rules" target="_blank"> <i class="icon"></i> 网站规则 </a> </li> 
       </ul> 
       <ul class="problem-list clearfix"> 
        <li> 
         <ol class="problem-sub-list"> 
          <li><a href="help.html#Q1" target="_blank">使用余额支付不了？</a></li> 
          <li><a href="help.html#Q2" target="_blank">在线支付订单取消后，钱怎么返现？</a></li> 
          <li><a href="help.html#Q5" target="_blank">饿了么账户里的款项怎么提现？</a></li> 
          <li><a href="help.html#Q6" target="_blank">一个红包能拆开多次使用吗？</a></li> 
          <li><a href="help.html#Q7" target="_blank">下单后，餐厅长时间未确认订单怎么办？</a></li> 
         </ol> </li> 
        <li> 
         <ol class="problem-sub-list second"> 
          <li><a href="help.html#Q22" target="_blank">什么是超时赔付？</a></li> 
          <li><a href="help.html#Q11" target="_blank">返红包活动， 红包领取规则是什么？</a></li> 
          <li><a href="help.html#Q9" target="_blank">邀请好友了，为什么没获得红包？</a></li> 
          <li><a href="help.html#Q19" target="_blank">积分如何计算</a></li> 
          <li><a href="help.html#Q20" target="_blank">礼品兑换很多天了还没有收到，该怎么办？</a></li> 
         </ol> </li> 
        <li> <a href="help.html#Q1">查看更多 &gt;</a> </li> 
       </ul> 
      </div> 
     </div> 
     <div class="support-site"> 
      <div class="service site-content"> 
       <h3>在线客服</h3> 
       <p>每天9:30-21:30为您解答疑惑</p> 
       <a class="btn" id="customerservice" href="JavaScript:" target="_blank">咨询我们</a> 
       <script>
        document.getElementById('customerservice').href=
        "/customerservice?jid=1820947377&companyID=402791&configID=123801&title="+encodeURIComponent(document.title);
      </script> 
      </div> 
      <div class="option site-content"> 
       <h3>意见反馈</h3> 
       <p>欢迎您提出高贵意见</p> 
       <a class="btn" href="feedback.html" target="_blank">有话要说</a> 
      </div> 
      <div class="phone site-content"> 
       <h3>24小时客服热线</h3> 
       <img src="{{ asset('home/images/number_pic.png') }}" alt="4000-557-117" /> 
      </div> 
     </div> 
    </div> 
    <script>
  $('.support-modal .btn').on('click',function(){
    $(this).parents('.modal').modal('hide');
  })
</script> 
   </div> 
   <div id="site_fixed" class="site-fixed"> 
    <a id="back_top" class="btn-back-top ui_invisible" role="button" title="回顶部"><i class="icon-backtop"></i></a> 
    <div class="btn-app-qrcode"> 
     <i class="icon-qrcode"></i> 
     <img class="img-qrcode" src="{{ asset('home/images/app-qrcode.png') }}" alt="扫描二维码免费下载手机App" /> 
    </div> 
   </div> 
   <div id="modal_globalLogin" class="modal-global-login modal hide fade" aria-hidden="true" tabindex="-1"> 
    <a class="close" aria-hidden="true">&times;</a> 
    <iframe class="ilogin-iframe login_frame" src="https://account.ele.me/ilogin" frameborder="0" scrolling="no"></iframe> 
   </div> 
   @endsection