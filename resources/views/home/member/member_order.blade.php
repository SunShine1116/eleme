@extends('home.public.parents')
@section('content')
 <div class="main-content"> 
      <div class="content-header"> 
       <h2> 最近一个月的饿单 - 共1张 </h2> 
       <button class="btn-who-get-dishes" id="shuiqunawaimai_open">谁去拿外卖</button> 
       <a class="tip-app-promotion" href="/mobile" target="_blank">随时关注饿单状态</a> 
       <a class="btn-faq" href="help" target="_blank"><span class="btn-faq-icon">?</span> 热门问题</a> 
      </div> 
      <div class="content-inner"> 
       <div class="order-list"> 
        <span id="ref_time"></span> 
        <div class="order-block" data-id="12266119358749105"> 
         <div class="order-header"> 
          <div class="status-wrapper"> 
           <div class="status gray">
             订单已取消@
            <a href="http://r.ele.me/ayzhssnzzbql" target="_blank">臻好时酸奶自助冰淇淋</a> 
           </div> 
           <div class="order-actions"> 
            <div id="cancelOrderConfirm" class="hide flattern"> 
             <p>确认取消 <b>臻好时酸奶自助冰淇淋</b> 的饿单吗？</p> 
             <span class="btn btn-small btn-primary cancelOrderConfirmed">确认取消</span> 
             <span class="btn btn-small cancelOrderUnconfirmed">再等等</span> 
            </div> 
            <div id="cancelOrderModal" class="modal hide fade"> 
             <div class="modal-dialog"> 
              <div class="modal-content"> 
               <div class="header"> 
                <span class="close closeCancelOrderModal">&times;</span> 
               </div> 
               <div class="modal-body"> 
                <div class="cancelOrderMessage fail flattern"> 
                 <h3>取消订单失败</h3> 
                 <p class="msg">未知错误</p> 
                 <span class="btn btn-small btn-primary" data-dismiss="modal">返回饿单</span> 
                </div> 
                <form class="cancelOrderMessage success flattern"> 
                 <h3>取消订单成功</h3> 
                 <p>请告诉我们您取消的原因，帮助我们改进，谢谢！</p> 
                 <label class="radio"><input type="radio" name="reason" />临时有事，无法接收外卖</label> 
                 <label class="radio"><input type="radio" name="reason" />点错菜了，重新点</label> 
                 <label class="radio"><input type="radio" name="reason" />不想买了</label> 
                 <label class="radio"><input type="radio" name="reason" id="cancelOrderReason" />其他</label> 
                 <label class="radio hide" id="cancelOrderReasonText"> <textarea name="" id="cancelReasonText" rows="3"></textarea> </label> 
                 <span class="btn btn-small btn-primary submitCancelOrderReason" data-id="12266119358749105">确认提交</span> 
                </form> 
               </div> 
              </div> 
             </div> 
            </div> 
           </div> 
          </div> 
          <div class="line-two"> 
           <table class="table table-condensed"> 
            <tbody> 
             <tr> 
              <td class="col1"><span class="item-name">饿单号:</span> 12266119358749105</td> 
              <td class="col2"><span class="item-name">下单时间:</span><span class="om_time" data-time="2015-03-09 23:03:20">2015-03-09 23:03</span></td> 
              <td class="col3"><span class="item-name">餐厅电话:</span>15537263070 15537263070</td> 
             </tr> 
             <tr> 
              <td class="col1"><span class="item-name">饿单地址:</span> 中山北路1655弄 29支弄宝钢公寓 11号304</td> 
              <td class="col2"><span class="item-name">联系电话:</span>18005151538</td> 
              <td class="col3"><span class="item-name">饿单备注:</span> </td> 
             </tr> 
            </tbody> 
           </table> 
          </div> 
         </div> 
         <div class="order-rate"> 
          <div class="line-one"> 
           <div class="col-title">
             点评送餐速度： 
           </div> 
           <div class="col-content">
             当前状态下不能点评 
           </div> 
          </div> 
         </div> 
         <div class="order-rate"> 
          <div class="line-one"> 
           <div class="col-title">
             您对餐厅的服务是否满意： 
           </div> 
           <div class="col-content">
            当前状态下不能点评
           </div> 
          </div> 
         </div> 
         <div class="order-table-wrapper"> 
          <table class="order-table table table-striped"> 
           <thead> 
            <tr> 
             <th class="col-name">美食篮子</th> 
             <th class="col-rating"></th> 
             <th class="col-price">单价</th> 
             <th class="col-quantity">数量</th> 
             <th class="col-sub-total">小计</th> 
            </tr> 
           </thead> 
           <tbody> 
            <tr 12266119358749105=""> 
             <td class="col-name"> <span>原味炒酸奶</span> </td> 
             <td class="col-rating"> 该状态下不能点评 </td> 
             <td class="col-price">￥6</td> 
             <td class="col-quantity">1</td> 
             <td class="col-sub-total">￥6</td> 
            </tr> 
            <tr 12266119358749105=""> 
             <td class="col-name"> <span>抹茶炒酸奶</span> </td> 
             <td class="col-rating"> 该状态下不能点评 </td> 
             <td class="col-price">￥10</td> 
             <td class="col-quantity">1</td> 
             <td class="col-sub-total">￥10</td> 
            </tr> 
            <tr 12266119358749105=""> 
             <td class="col-name"> <span>巧克力炒酸奶</span> </td> 
             <td class="col-rating"> 该状态下不能点评 </td> 
             <td class="col-price">￥10</td> 
             <td class="col-quantity">1</td> 
             <td class="col-sub-total">￥10</td> 
            </tr> 
           </tbody> 
          </table> 
          <table class="order-table total-table table table-striped"> 
           <tfoot> 
            <tr> 
             <td class="col-name">合计</td> 
             <td class="col-rating"></td> 
             <td class="col-price"></td> 
             <td class="col-quantity">3</td> 
             <td class="col-sub-total relative">￥26 </td> 
            </tr> 
           </tfoot> 
          </table> 
         </div> 
        </div> 
       </div> 
       <div> 
       </div> 
      </div> 
      <div id="modal-shuiqunawaimai" class="modal-who-get-dishes modal hide fade" aria-hidden="true" tabindex="-1"> 
       <div class="modal-header"> 
        <a href="#" class="close" aria-hidden="true">&times;</a> 
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
        <a href="#" class="close" aria-hidden="true">&times;</a> 
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
        <a href="#" class="close" aria-hidden="true">&times;</a> 
        <h3> <i class="icon-phone"></i>拨打餐厅电话退单： <span id="cancel_rstTel"></span> </h3> 
       </div> 
       <div class="modal-body"> 
        <div class="order-info clearfix"> 
         <img id="cancel_rstLogo" /> 
         <h4 id="cancel_rstName"></h4> 
         <p> 饿单号：<span id="cancel_orderSn"></span>&nbsp; 金额：<span id="cancel_orderTotal"></span>元 </p> 
        </div> 
       </div> 
       <div class="modal-footer"> 
        <a href="#" class="btn  btn-yellow close" aria-hidden="true">返回饿单</a> 
       </div> 
      </div> 
      <div id="modal_tradeReport" class="modal-who-get-dishes modal hide fade" aria-hidden="true" tabindex="-1"> 
       <div class="modal-header"> 
        <a href="#" class="close" aria-hidden="true">&times;</a> 
        <h3>投诉举报</h3> 
       </div> 
       <div class="modal-body"> 
        <div class="alert-error trade-error" id="trade-warning-banner"></div> 
        <form name="trade-form" id="trade-form"> 
         <input type="hidden" name="trade-order-id" id="trade-order-id" /> 
         <input type="hidden" id="exchange_csrf" value="f8fad6e4510afe5fbd48dc5206d213175bf57c1f" /> 
         <label><input type="radio" class="trade-radio" name="trade-item" value="0" />餐厅已确认，但没送外卖</label> 
         <label><input type="radio" class="trade-radio" name="trade-item" value="1" />餐厅参加了活动，但没有优惠</label> 
         <label><input type="radio" class="trade-radio" name="trade-item" value="2" />吐槽其他</label> 
         <div>
          <textarea class="trade-text" id="trade-text" name="trade-text" disabled="disabled" placeholder="输入您想要吐槽的内容"></textarea>
         </div> 
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
     <img class="img-qrcode" src="{{ asset('images/app-qrcode.png') }}" alt="扫描二维码免费下载手机App" /> 
    </div> 
   </div> 
@endsection