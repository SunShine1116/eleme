 @extends('home.public.parents')
@section('content')
   
     <div class="main-content"> 
      <div class="content-header"> 
       <h2> 一个月之前的饿单 - 共12张 </h2> 
       <button class="btn-who-get-dishes" id="shuiqunawaimai_open">谁去拿外卖</button> 
       <a class="tip-app-promotion" href="/mobile" target="_blank">随时关注饿单状态</a> 
       <a class="btn-faq" href="help" target="_blank"><span class="btn-faq-icon">?</span> 热门问题</a> 
      </div> 
      <div class="content-inner"> 
       <div class="order-list"> 
        <span id="ref_time"></span> 
        <div class="order-block" data-id="12659026956750714"> 
         <div class="order-header"> 
          <div class="status-wrapper"> 
           <div class="status green">
             交易已完成@
            <a href="http://r.ele.me/zb-sbshb" target="_blank">士百士汉堡</a> 
           </div> 
           <div class="order-actions"> 
            <a class="btn-clone clone_order" href="http://v5.ele.me/order/12659026956750714/rebuy" val="12659026956750714"><i></i>再来一份</a> 
            <div id="cancelOrderConfirm" class="hide flattern"> 
             <p>确认取消 <b>士百士汉堡</b> 的饿单吗？</p> 
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
                 <span class="btn btn-small btn-primary submitCancelOrderReason" data-id="12659026956750714">确认提交</span> 
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
              <td class="col1"><span class="item-name">饿单号:</span> 12659026956750714</td> 
              <td class="col2"><span class="item-name">下单时间:</span><span class="om_time" data-time="2014-11-01 14:58:00">2014-11-01 14:58</span></td> 
              <td class="col3"><span class="item-name">餐厅电话:</span>52040702 13917402350 13917402350</td> 
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
             距离下单已经超过一周，请下次收到美食后尽快点评 
           </div> 
          </div> 
         </div> 
         <div class="order-rate"> 
          <div class="line-one"> 
           <div class="col-title">
             您对餐厅的服务是否满意： 
           </div> 
           <div class="col-content">
             距离下单已经超过一周，系统默认为好评 
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
            <tr 12659026956750714=""> 
             <td class="col-name"> <span>牛肉饭</span> </td> 
             <td class="col-rating"> 过期不能点评 </td> 
             <td class="col-price">￥16</td> 
             <td class="col-quantity">1</td> 
             <td class="col-sub-total">￥16</td> 
            </tr> 
            <tr 12659026956750714=""> 
             <td class="col-name"> <span>照烤鸡腿堡+薯条+鸡翅+鸡柳</span> </td> 
             <td class="col-rating"> 过期不能点评 </td> 
             <td class="col-price">￥20</td> 
             <td class="col-quantity">1</td> 
             <td class="col-sub-total">￥20</td> 
            </tr> 
           </tbody> 
          </table> 
          <table class="order-table table table-striped"> 
           <thead> 
            <tr> 
             <th class="col-name">其他费用</th> 
             <th class="col-rating"></th> 
             <th class="col-price">单价</th> 
             <th class="col-quantity">数量</th> 
             <th class="col-sub-total">小计</th> 
            </tr> 
           </thead> 
           <tbody> 
            <tr> 
             <td class="col-name"> 餐盒费 </td> 
             <td class="col-rating"></td> 
             <td class="col-price">￥1</td> 
             <td class="col-quantity">1</td> 
             <td class="col-sub-total">￥1</td> 
            </tr> 
           </tbody> 
          </table> 
          <table class="order-table total-table table table-striped"> 
           <tfoot> 
            <tr> 
             <td class="col-name">合计</td> 
             <td class="col-rating"></td> 
             <td class="col-price"></td> 
             <td class="col-quantity">2</td> 
             <td class="col-sub-total relative">￥37 </td> 
            </tr> 
           </tfoot> 
          </table> 
         </div> 
        </div> 
        <div class="order-block" data-id="12358330119834450"> 
         <div class="order-header"> 
          <div class="status-wrapper"> 
           <div class="status green">
             交易已完成@
            <a href="http://r.ele.me/xjh-dmjbd" target="_blank">多米居便当</a> 
           </div> 
           <div class="order-actions"> 
            <a class="btn-clone clone_order" href="http://v5.ele.me/order/12358330119834450/rebuy" val="12358330119834450"><i></i>再来一份</a> 
            <div id="cancelOrderConfirm" class="hide flattern"> 
             <p>确认取消 <b>多米居便当</b> 的饿单吗？</p> 
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
                 <span class="btn btn-small btn-primary submitCancelOrderReason" data-id="12358330119834450">确认提交</span> 
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
              <td class="col1"><span class="item-name">饿单号:</span> 12358330119834450</td> 
              <td class="col2"><span class="item-name">下单时间:</span><span class="om_time" data-time="2014-10-14 18:39:33">2014-10-14 18:39</span></td> 
              <td class="col3"><span class="item-name">餐厅电话:</span>021-24214574 13046688561 13046688561</td> 
             </tr> 
             <tr> 
              <td class="col1"><span class="item-name">饿单地址:</span> 小木桥路251号 天亿大厦703</td> 
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
             距离下单已经超过一周，请下次收到美食后尽快点评 
           </div> 
          </div> 
         </div> 
         <div class="order-rate"> 
          <div class="line-one"> 
           <div class="col-title">
             您对餐厅的服务是否满意： 
           </div> 
           <div class="col-content">
             距离下单已经超过一周，系统默认为好评 
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
            <tr 12358330119834450=""> 
             <td class="col-name"> <span>土豆牛肉饭</span> </td> 
             <td class="col-rating"> 
              <div class="rating-input-group" rel="211151221"> 
               <input class="order-item-rating-input required" type="radio" title="差评" name="order-item-rating-211151221"  value="1" disabled="disabled" /> 
               <input class="order-item-rating-input required" type="radio" title="差点意思" name="order-item-rating-211151221" value="2" checked="checked" disabled="disabled" /> 
               <input class="order-item-rating-input required" type="radio" title="一般般" name="order-item-rating-211151221" value="3" disabled="disabled" /> 
               <input class="order-item-rating-input required" type="radio" title="有点滋味" name="order-item-rating-211151221"  value="4" disabled="disabled" /> 
               <input class="order-item-rating-input required" type="radio" title="我的最爱" name="order-item-rating-211151221"  value="5" disabled="disabled" /> 
              </div> 
              <div class="rating-hover-text" id="rating-hover-text-211151221">
               差点意思
              </div> </td> 
             <td class="col-price">￥15</td> 
             <td class="col-quantity">1</td> 
             <td class="col-sub-total">￥15</td> 
            </tr> 
           </tbody> 
          </table> 
          <table class="order-table total-table table table-striped"> 
           <tfoot> 
            <tr> 
             <td class="col-name">合计</td> 
             <td class="col-rating"></td> 
             <td class="col-price"></td> 
             <td class="col-quantity">4</td> 
             <td class="col-sub-total relative">￥60 </td> 
            </tr> 
           </tfoot> 
          </table> 
         </div> 
        </div> 
        <div class="order-block" data-id="12757021601751831"> 
         <div class="order-header"> 
          <div class="status-wrapper"> 
           <div class="status gray">
             付款失败@
            <a href="http://r.ele.me/nj-gfsgm" target="_blank">【半价+赠饮】功夫手...</a> 
           </div> 
           <div class="hasten-btn"> 
           </div> 
           <div class="order-actions"> 
            <div id="cancelOrderConfirm" class="hide flattern"> 
             <p>确认取消 <b>【半价+赠饮】功夫手擀面（原胡一刀）</b> 的饿单吗？</p> 
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
                 <span class="btn btn-small btn-primary submitCancelOrderReason" data-id="12757021601751831">确认提交</span> 
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
              <td class="col1"><span class="item-name">饿单号:</span> 12757021601751831</td> 
              <td class="col2"><span class="item-name">下单时间:</span><span class="om_time" data-time="2014-09-24 13:24:40">2014-09-24 13:24</span></td> 
              <td class="col3"><span class="item-name">餐厅电话:</span>13611570790 18013977286 13611570790</td> 
             </tr> 
             <tr> 
              <td class="col1"><span class="item-name">饿单地址:</span> 33333333333331</td> 
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
            <tr 12757021601751831=""> 
             <td class="col-name"> <span>牛肉拌面</span> </td> 
             <td class="col-rating"> 该状态下不能点评 </td> 
             <td class="col-price">￥13</td> 
             <td class="col-quantity">1</td> 
             <td class="col-sub-total">￥13</td> 
            </tr> 
            <tr 12757021601751831=""> 
             <td class="col-name"> <span>牛杂拌面</span> </td> 
             <td class="col-rating"> 该状态下不能点评 </td> 
             <td class="col-price">￥13</td> 
             <td class="col-quantity">1</td> 
             <td class="col-sub-total">￥13</td> 
            </tr> 
            <tr 12757021601751831=""> 
             <td class="col-name"> <span>鸡丝拌面</span> </td> 
             <td class="col-rating"> 该状态下不能点评 </td> 
             <td class="col-price">￥11</td> 
             <td class="col-quantity">2</td> 
             <td class="col-sub-total">￥22</td> 
            </tr> 
            <tr 12757021601751831=""> 
             <td class="col-name"> <span>炸酱面</span> </td> 
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
             <td class="col-quantity">5</td> 
             <td class="col-sub-total relative">￥58 </td> 
            </tr> 
           </tfoot> 
          </table> 
         </div> 
        </div> 
        <div class="order-block" data-id="12446256481122141"> 
         <div class="order-header"> 
          <div class="status-wrapper"> 
           <div class="status gray">
             付款失败@
            <a href="http://r.ele.me/xw-kbccg" target="_blank">康博煲仔饭</a> 
           </div> 
           <div class="hasten-btn"> 
           </div> 
           <div class="order-actions"> 
            <div id="cancelOrderConfirm" class="hide flattern"> 
             <p>确认取消 <b>康博煲仔饭</b> 的饿单吗？</p> 
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
                 <span class="btn btn-small btn-primary submitCancelOrderReason" data-id="12446256481122141">确认提交</span> 
                </form> 
               </div> 
              </div> 
             </div> 
            </div> 
           </div> 
          </div> 
          <div class="line-three"> 
           <p class="book-tips"> 此订单为预订单，送餐时间：2014-03-11 12:30:00 </p> 
          </div> 
          <div class="line-two"> 
           <table class="table table-condensed"> 
            <tbody> 
             <tr> 
              <td class="col1"><span class="item-name">饿单号:</span> 12446256481122141</td> 
              <td class="col2"><span class="item-name">下单时间:</span><span class="om_time" data-time="2014-03-11 11:36:19">1970-01-01 00:00</span></td> 
              <td class="col3"><span class="item-name">餐厅电话:</span>18260038487 18260038874</td> 
             </tr> 
             <tr> 
              <td class="col1"><span class="item-name">饿单地址:</span> qq</td> 
              <td class="col2"><span class="item-name">联系电话:</span>18252022143</td> 
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
            <tr 12446256481122141=""> 
             <td class="col-name"> <span>香菇滑鸡瓦煲饭</span> </td> 
             <td class="col-rating"> 该状态下不能点评 </td> 
             <td class="col-price">￥13</td> 
             <td class="col-quantity">1</td> 
             <td class="col-sub-total">￥13</td> 
            </tr> 
            <tr 12446256481122141=""> 
             <td class="col-name"> <span>排骨瓦煲饭</span> </td> 
             <td class="col-rating"> 该状态下不能点评 </td> 
             <td class="col-price">￥15</td> 
             <td class="col-quantity">1</td> 
             <td class="col-sub-total">￥15</td> 
            </tr> 
           </tbody> 
          </table> 
          <table class="order-table total-table table table-striped"> 
           <tfoot> 
            <tr> 
             <td class="col-name">合计</td> 
             <td class="col-rating"></td> 
             <td class="col-price"></td> 
             <td class="col-quantity">2</td> 
             <td class="col-sub-total relative">￥28 </td> 
            </tr> 
           </tfoot> 
          </table> 
         </div> 
        </div> 
        <div class="order-block" data-id="12246256277121447"> 
         <div class="order-header"> 
          <div class="status-wrapper"> 
           <div class="status gray">
             付款失败@
            <a href="http://r.ele.me/xw-ppgjf" target="_blank">胖胖炖菜+盖浇饭</a> 
           </div> 
           <div class="hasten-btn"> 
           </div> 
           <div class="order-actions"> 
            <div id="cancelOrderConfirm" class="hide flattern"> 
             <p>确认取消 <b>胖胖炖菜+盖浇饭</b> 的饿单吗？</p> 
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
                 <span class="btn btn-small btn-primary submitCancelOrderReason" data-id="12246256277121447">确认提交</span> 
                </form> 
               </div> 
              </div> 
             </div> 
            </div> 
           </div> 
          </div> 
          <div class="line-three"> 
           <p class="book-tips"> 此订单为预订单，送餐时间：2014-03-11 12:30:00 </p> 
          </div> 
          <div class="line-two"> 
           <table class="table table-condensed"> 
            <tbody> 
             <tr> 
              <td class="col1"><span class="item-name">饿单号:</span> 12246256277121447</td> 
              <td class="col2"><span class="item-name">下单时间:</span><span class="om_time" data-time="2014-03-11 11:25:39">1970-01-01 00:00</span></td> 
              <td class="col3"><span class="item-name">餐厅电话:</span>18260038487 18260083252 18260083252</td> 
             </tr> 
             <tr> 
              <td class="col1"><span class="item-name">饿单地址:</span> qq</td> 
              <td class="col2"><span class="item-name">联系电话:</span>18252022143</td> 
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
            <tr 12246256277121447=""> 
             <td class="col-name"> <span>东北乱炖</span> </td> 
             <td class="col-rating"> 该状态下不能点评 </td> 
             <td class="col-price">￥16</td> 
             <td class="col-quantity">2</td> 
             <td class="col-sub-total">￥32</td> 
            </tr> 
            <tr 12246256277121447=""> 
             <td class="col-name"> <span>小笨鸡炖香菇</span> </td> 
             <td class="col-rating"> 该状态下不能点评 </td> 
             <td class="col-price">￥15</td> 
             <td class="col-quantity">2</td> 
             <td class="col-sub-total">￥30</td> 
            </tr> 
            <tr 12246256277121447=""> 
             <td class="col-name"> <span>酸菜炖鱼片</span> </td> 
             <td class="col-rating"> 该状态下不能点评 </td> 
             <td class="col-price">￥15</td> 
             <td class="col-quantity">1</td> 
             <td class="col-sub-total">￥15</td> 
            </tr> 
           </tbody> 
          </table> 
          <table class="order-table total-table table table-striped"> 
           <tfoot> 
            <tr> 
             <td class="col-name">合计</td> 
             <td class="col-rating"></td> 
             <td class="col-price"></td> 
             <td class="col-quantity">5</td> 
             <td class="col-sub-total relative">￥77 </td> 
            </tr> 
           </tfoot> 
          </table> 
         </div> 
        </div> 
        <div class="order-block" data-id="5722770"> 
         <div class="order-header"> 
          <div class="status-wrapper"> 
           <div class="status green">
             交易已完成@
            <a href="http://r.ele.me/hd-cxykc" target="_blank">川湘缘快餐</a> 
           </div> 
           <div class="order-actions"> 
            <a class="btn-clone clone_order" href="http://v5.ele.me/order/231542736732114/rebuy" val="231542736732114"><i></i>再来一份</a> 
            <div id="cancelOrderConfirm" class="hide flattern"> 
             <p>确认取消 <b>川湘缘快餐</b> 的饿单吗？</p> 
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
                 <span class="btn btn-small btn-primary submitCancelOrderReason" data-id="5722770">确认提交</span> 
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
              <td class="col1"><span class="item-name">饿单号:</span> 231542736732114</td> 
              <td class="col2"><span class="item-name">下单时间:</span><span class="om_time" data-time="2012-09-27 16:09:15">1970-01-01 00:00</span></td> 
              <td class="col3"><span class="item-name">餐厅电话:</span>13311528306 13311506372 13311528306</td> 
             </tr> 
             <tr> 
              <td class="col1"><span class="item-name">饿单地址:</span> qq</td> 
              <td class="col2"><span class="item-name">联系电话:</span>18252022143,025-72312112</td> 
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
             距离下单已经超过一周，请下次收到美食后尽快点评 
           </div> 
          </div> 
         </div> 
         <div class="order-rate"> 
          <div class="line-one"> 
           <div class="col-title">
             您对餐厅的服务是否满意： 
           </div> 
           <div class="col-content">
             距离下单已经超过一周，系统默认为好评 
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
            <tr 5722770=""> 
             <td class="col-name"> <span>红烧豆腐盖饭</span> </td> 
             <td class="col-rating"> 过期不能点评 </td> 
             <td class="col-price">￥8</td> 
             <td class="col-quantity">1</td> 
             <td class="col-sub-total">￥8</td> 
            </tr> 
            <tr 5722770=""> 
             <td class="col-name"> <span>西红柿鸡蛋面</span> </td> 
             <td class="col-rating"> 过期不能点评 </td> 
             <td class="col-price">￥8</td> 
             <td class="col-quantity">1</td> 
             <td class="col-sub-total">￥8</td> 
            </tr> 
            <tr 5722770=""> 
             <td class="col-name"> <span>炝炒油麦菜盖饭</span> </td> 
             <td class="col-rating"> 过期不能点评 </td> 
             <td class="col-price">￥8</td> 
             <td class="col-quantity">1</td> 
             <td class="col-sub-total">￥8</td> 
            </tr> 
            <tr 5722770=""> 
             <td class="col-name"> <span>酸菜粉丝盖饭</span> </td> 
             <td class="col-rating"> 过期不能点评 </td> 
             <td class="col-price">￥8</td> 
             <td class="col-quantity">1</td> 
             <td class="col-sub-total">￥8</td> 
            </tr> 
           </tbody> 
          </table> 
          <table class="order-table total-table table table-striped"> 
           <tfoot> 
            <tr> 
             <td class="col-name">合计</td> 
             <td class="col-rating"></td> 
             <td class="col-price"></td> 
             <td class="col-quantity">4</td> 
             <td class="col-sub-total relative">￥32 </td> 
            </tr> 
           </tfoot> 
          </table> 
         </div> 
        </div> 
        <div class="order-block" data-id="5582323"> 
         <div class="order-header"> 
          <div class="status-wrapper"> 
           <div class="status green">
             交易已完成@
            <a href="http://r.ele.me/sj-jjyy" target="_blank">叽叽吖吖</a> 
           </div> 
           <div class="order-actions"> 
            <a class="btn-clone clone_order" href="http://v5.ele.me/order/243263685525143/rebuy" val="243263685525143"><i></i>再来一份</a> 
            <div id="cancelOrderConfirm" class="hide flattern"> 
             <p>确认取消 <b>叽叽吖吖</b> 的饿单吗？</p> 
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
                 <span class="btn btn-small btn-primary submitCancelOrderReason" data-id="5582323">确认提交</span> 
                </form> 
               </div> 
              </div> 
             </div> 
            </div> 
           </div> 
          </div> 
          <div class="line-three"> 
           <p class="book-tips"> 此订单为预订单，送餐时间：2012-09-20 20:00:00 </p> 
          </div> 
          <div class="line-two"> 
           <table class="table table-condensed"> 
            <tbody> 
             <tr> 
              <td class="col1"><span class="item-name">饿单号:</span> 243263685525143</td> 
              <td class="col2"><span class="item-name">下单时间:</span><span class="om_time" data-time="2012-09-20 17:19:49">1970-01-01 00:00</span></td> 
              <td class="col3"><span class="item-name">餐厅电话:</span>15026964500 15026964500</td> 
             </tr> 
             <tr> 
              <td class="col1"><span class="item-name">饿单地址:</span> 丹凤街</td> 
              <td class="col2"><span class="item-name">联系电话:</span>18252088545,02587423050</td> 
              <td class="col3"><span class="item-name">饿单备注:</span> 不吃辣 </td> 
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
             距离预定送达时间已经超过3小时啦，请下次收到美食后尽快点评 
           </div> 
          </div> 
         </div> 
         <div class="order-rate"> 
          <div class="line-one"> 
           <div class="col-title">
             您对餐厅的服务是否满意： 
           </div> 
           <div class="col-content">
             距离下单已经超过一周，系统默认为好评 
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
            <tr 5582323=""> 
             <td class="col-name"> <span>红烧大鱼块</span> </td> 
             <td class="col-rating"> 过期不能点评 </td> 
             <td class="col-price">￥13</td> 
             <td class="col-quantity">1</td> 
             <td class="col-sub-total">￥13</td> 
            </tr> 
            <tr 5582323=""> 
             <td class="col-name"> <span>香香鸡柳饭</span> </td> 
             <td class="col-rating"> 过期不能点评 </td> 
             <td class="col-price">￥10</td> 
             <td class="col-quantity">1</td> 
             <td class="col-sub-total">￥10</td> 
            </tr> 
            <tr 5582323=""> 
             <td class="col-name"> <span>咖喱鸡柳饭</span> </td> 
             <td class="col-rating"> 过期不能点评 </td> 
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
             <td class="col-sub-total relative">￥33 </td> 
            </tr> 
           </tfoot> 
          </table> 
         </div> 
        </div> 
        <div class="order-block" data-id="5218639"> 
         <div class="order-header"> 
          <div class="status-wrapper"> 
           <div class="status green">
             交易已完成@
            <a href="http://r.ele.me/mld" target="_blank">麦乐地(炸鸡 汉堡 ...</a> 
           </div> 
           <div class="order-actions"> 
            <a class="btn-clone clone_order" href="http://v5.ele.me/order/402173171727224/rebuy" val="402173171727224"><i></i>再来一份</a> 
            <div id="cancelOrderConfirm" class="hide flattern"> 
             <p>确认取消 <b>麦乐地(炸鸡 汉堡 饮料）</b> 的饿单吗？</p> 
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
                 <span class="btn btn-small btn-primary submitCancelOrderReason" data-id="5218639">确认提交</span> 
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
              <td class="col1"><span class="item-name">饿单号:</span> 402173171727224</td> 
              <td class="col2"><span class="item-name">下单时间:</span><span class="om_time" data-time="2012-08-29 16:35:58">1970-01-01 00:00</span></td> 
              <td class="col3"><span class="item-name">餐厅电话:</span>15900536806 15900536806</td> 
             </tr> 
             <tr> 
              <td class="col1"><span class="item-name">饿单地址:</span> qq</td> 
              <td class="col2"><span class="item-name">联系电话:</span>18252022143,025-72312112</td> 
              <td class="col3"><span class="item-name">饿单备注:</span> 不要葱姜蒜 </td> 
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
             距离下单已经超过一周，请下次收到美食后尽快点评 
           </div> 
          </div> 
         </div> 
         <div class="order-rate"> 
          <div class="line-one"> 
           <div class="col-title">
             您对餐厅的服务是否满意： 
           </div> 
           <div class="col-content">
             距离下单已经超过一周，系统默认为好评 
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
            <tr 5218639=""> 
             <td class="col-name"> <span>H11（大鸡排+地瓜条+布丁奶茶）</span> </td> 
             <td class="col-rating"> 过期不能点评 </td> 
             <td class="col-price">￥18</td> 
             <td class="col-quantity">5</td> 
             <td class="col-sub-total">￥90</td> 
            </tr> 
           </tbody> 
          </table> 
          <table class="order-table total-table table table-striped"> 
           <tfoot> 
            <tr> 
             <td class="col-name">合计</td> 
             <td class="col-rating"></td> 
             <td class="col-price"></td> 
             <td class="col-quantity">5</td> 
             <td class="col-sub-total relative">￥90 </td> 
            </tr> 
           </tfoot> 
          </table> 
         </div> 
        </div> 
        <div class="order-block" data-id="4944174"> 
         <div class="order-header"> 
          <div class="status-wrapper"> 
           <div class="status gray">
             无效订单@
            <a href="http://r.ele.me/gd-bbhtss" target="_blank">百变禾田寿司</a> 
           </div> 
           <div class="order-actions"> 
            <div id="cancelOrderConfirm" class="hide flattern"> 
             <p>确认取消 <b>百变禾田寿司</b> 的饿单吗？</p> 
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
                 <span class="btn btn-small btn-primary submitCancelOrderReason" data-id="4944174">确认提交</span> 
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
              <td class="col1"><span class="item-name">饿单号:</span> 194292357711538</td> 
              <td class="col2"><span class="item-name">下单时间:</span><span class="om_time" data-time="2012-08-01 11:30:29">1970-01-01 00:00</span></td> 
              <td class="col3"><span class="item-name">餐厅电话:</span>61061313 13798025005</td> 
             </tr> 
             <tr> 
              <td class="col1"><span class="item-name">饿单地址:</span> 江苏南京</td> 
              <td class="col2"><span class="item-name">联系电话:</span>18252022121,025-72312112</td> 
              <td class="col3"><span class="item-name">饿单备注:</span> 不吃辣 </td> 
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
            <tr 4944174=""> 
             <td class="col-name"> <span>玉米沙律寿司(个)</span> </td> 
             <td class="col-rating"> 该状态下不能点评 </td> 
             <td class="col-price">￥1</td> 
             <td class="col-quantity">4</td> 
             <td class="col-sub-total">￥4</td> 
            </tr> 
            <tr 4944174=""> 
             <td class="col-name"> <span>玉子寿司（个）</span> </td> 
             <td class="col-rating"> 该状态下不能点评 </td> 
             <td class="col-price">￥1</td> 
             <td class="col-quantity">9</td> 
             <td class="col-sub-total">￥9</td> 
            </tr> 
            <tr 4944174=""> 
             <td class="col-name"> <span>海草寿司(个)</span> </td> 
             <td class="col-rating"> 该状态下不能点评 </td> 
             <td class="col-price">￥1</td> 
             <td class="col-quantity">1</td> 
             <td class="col-sub-total">￥1</td> 
            </tr> 
            <tr 4944174=""> 
             <td class="col-name"> <span>肉松寿司（个）</span> </td> 
             <td class="col-rating"> 该状态下不能点评 </td> 
             <td class="col-price">￥1</td> 
             <td class="col-quantity">1</td> 
             <td class="col-sub-total">￥1</td> 
            </tr> 
           </tbody> 
          </table> 
          <table class="order-table total-table table table-striped"> 
           <tfoot> 
            <tr> 
             <td class="col-name">合计</td> 
             <td class="col-rating"></td> 
             <td class="col-price"></td> 
             <td class="col-quantity">15</td> 
             <td class="col-sub-total relative">￥15 </td> 
            </tr> 
           </tfoot> 
          </table> 
         </div> 
        </div> 
        <div class="order-block" data-id="4925688"> 
         <div class="order-header"> 
          <div class="status-wrapper"> 
           <div class="status green">
             交易已完成@
            <a href="http://r.ele.me/cy-lj" target="_blank">卤家</a> 
           </div> 
           <div class="order-actions"> 
            <a class="btn-clone clone_order" href="http://v5.ele.me/order/396713535137120/rebuy" val="396713535137120"><i></i>再来一份</a> 
            <div id="cancelOrderConfirm" class="hide flattern"> 
             <p>确认取消 <b>卤家</b> 的饿单吗？</p> 
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
                 <span class="btn btn-small btn-primary submitCancelOrderReason" data-id="4925688">确认提交</span> 
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
              <td class="col1"><span class="item-name">饿单号:</span> 396713535137120</td> 
              <td class="col2"><span class="item-name">下单时间:</span><span class="om_time" data-time="2012-07-30 11:41:12">1970-01-01 00:00</span></td> 
              <td class="col3"><span class="item-name">餐厅电话:</span>13260222621 13260222621</td> 
             </tr> 
             <tr> 
              <td class="col1"><span class="item-name">饿单地址:</span> 江苏南京</td> 
              <td class="col2"><span class="item-name">联系电话:</span>18252022121,025-72312112</td> 
              <td class="col3"><span class="item-name">饿单备注:</span> 谢谢:) </td> 
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
             距离下单已经超过一周，请下次收到美食后尽快点评 
           </div> 
          </div> 
         </div> 
         <div class="order-rate"> 
          <div class="line-one"> 
           <div class="col-title">
             您对餐厅的服务是否满意： 
           </div> 
           <div class="col-content">
             距离下单已经超过一周，系统默认为好评 
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
            <tr 4925688=""> 
             <td class="col-name"> <span>中华宫保鸡丁饭</span> </td> 
             <td class="col-rating"> 过期不能点评 </td> 
             <td class="col-price">￥14</td> 
             <td class="col-quantity">1</td> 
             <td class="col-sub-total">￥14</td> 
            </tr> 
           </tbody> 
          </table> 
          <table class="order-table total-table table table-striped"> 
           <tfoot> 
            <tr> 
             <td class="col-name">合计</td> 
             <td class="col-rating"></td> 
             <td class="col-price"></td> 
             <td class="col-quantity">1</td> 
             <td class="col-sub-total relative">￥14 </td> 
            </tr> 
           </tfoot> 
          </table> 
         </div> 
        </div> 
       </div> 
       <div> 
        <div class="pagination"> 
         <ul> 
          <li class="prev disabled"><a href="#">← 上一页</a></li> 
          <li class="active"><a href="/profile/order/filter/before-month/page/1">1</a></li> 
          <li><a href="/profile/order/filter/before-month/page/2">2</a></li> 
          <li class="next"><a href="/profile/order/filter/before-month/page/2">下一页 →</a></li> 
         </ul> 
        </div> 
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
     <img class="img-qrcode" src="images/app-qrcode.png" alt="扫描二维码免费下载手机App" /> 
    </div> 
   </div> 
   @endsection