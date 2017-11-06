@extends('home.public.parents')
@section('content')
   <div class="container"> 
    <nav class="breadcrumb" data-geohash="wtw3equp"> 
     <a href="/place/-615736186413943440">登科保洁(长寿路店)</a> 
     <a class="breadcrumb-switch" href="city.html">[切换地址]</a> 
     <span class="breadcrumb-divider">/</span> 充值详情 
    </nav> 
    <div class="wash-paper clearfix" id="profile"> 
     
     <div class="main-content"> 
      <div class="content-header"> 
       <h2>充值详情</h2> 
      </div> 
      <div class="content-inner"> 
       <div class="charge-panel clearfix"> 
        <h5 class="title">选择金额：</h5> 
        <div class="slider-wrapper"> 
         <div class="charge_slider ui-eleme slider" title="拖动选择充值金额" max="500" min="50" id="charge_slider"></div> 
        </div> 
        <div class="charge_value">
         <strong id="charge_value">300</strong> 元
        </div> 
       </div> 
       <form id="charge_form" name="alipayment" action="http://v5.ele.memember_charge" method="post" target="_blank"> 
        <div id="body"> 
         <input name="total_fee" id="charge_fee" type="hidden" value="300" /> 
         <input name="csrf_token" id="csrf_token" type="hidden" value="f8fad6e4510afe5fbd48dc5206d213175bf57c1f" /> 
         <p>第三方支付：</p> 
         <div class="common_charge"> 
          <label><input type="radio" name="pay_bank" value="directPay" checked="" /><img src="images/alipay.gif" /></label> 
         </div> 
         <p>网上银行：</p> 
         <ul class="bank-list clearfix"> 
          <li><label><input type="radio" name="pay_bank" value="ICBCB2C" /><span class="icon ICBC"></span></label></li> 
          <li><label><input type="radio" name="pay_bank" value="CMB" /><span class="icon CMB"></span></label></li> 
          <li><label><input type="radio" name="pay_bank" value="CCB" /><span class="icon CCB"></span></label></li> 
          <li><label><input type="radio" name="pay_bank" value="BOCB2C" /><span class="icon BOC"></span></label></li> 
          <li><label><input type="radio" name="pay_bank" value="ABC" /><span class="icon ABC"></span></label></li> 
          <li><label><input type="radio" name="pay_bank" value="COMM" /><span class="icon COMM"></span></label></li> 
          <li><label><input type="radio" name="pay_bank" value="PSBC-DEBIT" /><span class="icon PSBC"></span></label></li> 
          <li><label><input type="radio" name="pay_bank" value="CEBBANK" /><span class="icon CEB"></span></label></li> 
          <li><label><input type="radio" name="pay_bank" value="SPDB" /><span class="icon SPDB"></span></label></li> 
          <li><label><input type="radio" name="pay_bank" value="GDB" /><span class="icon GDB"></span></label></li> 
          <li><label><input type="radio" name="pay_bank" value="CITIC" /><span class="icon CITIC"></span></label></li> 
          <li><label><input type="radio" name="pay_bank" value="CIB" /><span class="icon CIB"></span></label></li> 
          <li><a class="show-more-banks" id="show_more_banks">+ 显示更多银行</a></li> 
          <li class="more-bank hide"><label><input type="radio" name="pay_bank" value="SDB" /><span class="icon SDB"></span></label></li> 
          <li class="more-bank hide"><label><input type="radio" name="pay_bank" value="CMBC" /><span class="icon CMBC"></span></label></li> 
          <li class="more-bank hide"><label><input type="radio" name="pay_bank" value="BJBANK" /><span class="icon BJBANK"></span></label></li> 
          <li class="more-bank hide"><label><input type="radio" name="pay_bank" value="HZCBB2C" /><span class="icon HZCB"></span></label></li> 
          <li class="more-bank hide"><label><input type="radio" name="pay_bank" value="SHBANK" /><span class="icon SHBANK"></span></label></li> 
          <li class="more-bank hide"><label><input type="radio" name="pay_bank" value="BJRCB" /><span class="icon BJRCB"></span></label></li> 
          <li class="more-bank hide"><label><input type="radio" name="pay_bank" value="SPABANK" /><span class="icon SPABANK"></span></label></li> 
          <li class="more-bank hide"><label><input type="radio" name="pay_bank" value="FDB" /><span class="icon FDB"></span></label></li> 
          <li class="more-bank hide"><label><input type="radio" name="pay_bank" value="WZCBB2C-DEBIT" /><span class="icon WZCB"></span></label></li> 
          <li class="more-bank hide"><label><input type="radio" name="pay_bank" value="NBBANK " /><span class="icon NBBANK"></span></label></li> 
         </ul> 
        </div> 
        <div class="form-actions clearfix"> 
         <button class="btn btn-yellow" data-toggle="modal" href="#charge_box" type="button" id="charge_box_btn">确认付款</button> 
        </div> 
       </form> 
       <div class="modal hide fade" id="charge_box" aria-hidden="true" tabindex="-1"> 
        <div class="modal-header"> 
         <a class="close" data-dismiss="modal" aria-hidden="true">&times;</a> 
         <h3>充值遇到问题？</h3> 
        </div> 
        <div class="modal-body"> 
         <p>充值完成前请不要关闭此窗口。完成充值后请根据你的情况点击下面的按钮。</p> 
         <h4>请在新开网上储蓄卡页面完成付款后再选择。</h4> 
        </div> 
        <div class="modal-footer"> 
         <a class="btn" href="member_charge.html">充值遇到问题</a> 
         <a class="btn btn-yellow" href="member_index.html">已完成充值</a> 
         <a href="#" class="charge-back" id="btn_back" style="float:left;margin-top:10px;">返回重新选择充值方式</a> 
        </div> 
       </div> 
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