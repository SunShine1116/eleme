@extends('home.public.parents')
@section('content') 




  <div class="main-content">
    <div class="content-header">
  <h2>    退单中的饿单
    - 共0张
  </h2>
  <button class="btn-who-get-dishes" id="shuiqunawaimai_open">谁去拿外卖</button>
  <a class="tip-app-promotion" href="/mobile" target="_blank">随时关注饿单状态</a>
  <a class="btn-faq" href="help.html" target="_blank"><span class="btn-faq-icon">?</span> 热门问题</a>
</div>

<div class="content-inner">

  <div class="order-list">
  <span id="ref_time"></span>
      </div>

  </div>

<div id="modal-shuiqunawaimai" class="modal-who-get-dishes modal hide fade" aria-hidden="true" tabindex="-1">
  <div class="modal-header">
    <a href="#" class="close" aria-hidden="true">×</a>
    <h3>谁去拿外卖</h3>
  </div>
  <div class="modal-body">
    <div class="who-get-dishes-wrapper">
      <h2 class="wgd-badge"></h2>
      <a id="trigger" class="wgd-btn"></a>
      <span class="wgd-rules">随机到最小数字的人去拿外卖</span>
      <span id="lastResult" class="wgd-bg-text">↓ Start</span>
      <ul id="result" class="wgd-result-list"></ul>
    </div>
  </div>
</div>
<div id="modal-cart-not-the-same-restaurant" class="modal hide fade" aria-hidden="true" tabindex="-1">
  <div class="modal-header">
    <a href="#" class="close" aria-hidden="true">×</a>
    <h3>请先清空美食篮子</h3>
  </div>
  <div class="modal-body">
      <p>您需要先清空美食篮子才能挑选其他餐厅的美食哦:)</p>
  </div>
  <div class="modal-footer">
    <a href="/cart/clearGroup" class="btn  btn-yellow clear-cart">清空美食篮子</a>
  </div>
</div>

<div id="modal_cancelOrderByPhone" class="modal-cancel-order-by-phone modal hide fade" aria-hidden="true" tabindex="-1">
  <div class="modal-header">
    <a href="#" class="close" aria-hidden="true">×</a>
    <h3>
      <i class="icon-phone"></i>拨打餐厅电话退单：
      <span id="cancel_rstTel"></span>
    </h3>
  </div>
  <div class="modal-body">
    <div class="order-info clearfix">
      <img id="cancel_rstLogo" />
      <h4 id="cancel_rstName"></h4>
      <p>
        饿单号：<span id="cancel_orderSn"></span>&nbsp;
        金额：<span id="cancel_orderTotal"></span>元
      </p>
    </div>
  </div>
  <div class="modal-footer">
    <a href="#" class="btn  btn-yellow close" aria-hidden="true">返回饿单</a>
  </div>
</div>

<div id="modal_tradeReport" class="modal-who-get-dishes modal hide fade" aria-hidden="true" tabindex="-1">
  <div class="modal-header">
    <a href="#" class="close" aria-hidden="true">×</a>
    <h3>投诉举报</h3>
  </div>
  <div class="modal-body">
    <div class="alert-error trade-error" id="trade-warning-banner"></div>
    <form name="trade-form" id="trade-form">
      <input type="hidden" name="trade-order-id" id="trade-order-id">
      <input type="hidden" id="exchange_csrf" value="f8fad6e4510afe5fbd48dc5206d213175bf57c1f">
      <label><input type="radio" class="trade-radio" name="trade-item" value="0">餐厅已确认，但没送外卖</label>
      <label><input type="radio" class="trade-radio" name="trade-item" value="1">餐厅参加了活动，但没有优惠</label>
      <label><input type="radio" class="trade-radio" name="trade-item" value="2">吐槽其他</label>
      <div><textarea class="trade-text" id="trade-text" name="trade-text" disabled="disabled" placeholder="输入您想要吐槽的内容"></textarea></div>
    </form>
  </div>
  <div class="modal-footer">
    <a id="trade-check-btn" class="btn" aria-hidden="true">确定</a>
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

