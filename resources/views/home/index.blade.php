@extends('home.public.parent')
@section('content') 
           
             <div class="container"> 
                <nav class="breadcrumb" data-geohash="wtw3equp">
                   <?php echo $cityname ?>
                   <a class="breadcrumb-switch" href="city">[切换地址]</a> 
                </nav> 
                
                <div class="row favored-restaurants restaurants-row" id="favored-bar"> 
                   <div class="span12 row-wrapper"> 
                      <div class="row"> 
                         <div class="span12 category-restaurant-header"> 
                            <span class="title">我的收藏</span> 
                            <span class="right-action"><a href="member_collect_shop.html">设置</a></span> 
                         </div> 
                         <div class="span12" id="favored-restaurants"> 
                            <table class="restaurant-list-table zebra-striped1"> 
                               <tbody> 
                                  <tr> 
                                     <td> 
                                        <div class="restaurant-block lite"> 
                                            <div class="add-favor"></div> 
                                        </div> 
                                     </td> 
                                   <td> 
                                      <div class="restaurant-block lite">   
                                          <div class="add-favor"></div> 
                                      </div> 
                                   </td> 
                                   <td> 
                                      <div class="restaurant-block lite"> 
                                          <div class="add-favor"></div> 
                                      </div> 
                                   </td> 
                                   <td> 
                                      <div class="restaurant-block lite"> 
                                          <div class="add-favor"></div> 
                                      </div> 
                                   </td> 
                                   <td> 
                                      <div class="restaurant-block lite"> 
                                          <div class="add-favor"></div> 
                                      </div> 
                                   </td> 
                                  </tr> 
                               </tbody> 
                            </table> 
                         </div> 
                      </div> 
                   </div> 
                </div> 

               
                <div class="row promoted-restaurants restaurants-row"> 
                   <div class="span12 row-wrapper"> 
                      <div class="row"> 
                           <div class="span12 category-restaurant-header with-restaurant-filter"> 
                                <div class="row"> 
                                     <div class="span12"> 
                                          <div id="filter-btn-wrapper"> 
                                               <span class="filter-btn" pinyin="tuijian" ubt-change="filter_tuijian"> <input type="checkbox" name="filter" value="tuijian" /><span class="filter-text tuijian">热门餐厅</span> </span> 
                                               <span class="filter-btn" pinyin="open" ubt-change="filter_open"> <input type="checkbox" name="filter" value="open" /><span class="filter-text open">营业中</span> </span> 
                                               <span class="filter-divider"></span> 
                                               <span class="filter-btn activity-filter" pinyin="online_payment" ubt-change="filter_online_payment"> <input type="checkbox" name="filter" /><span class="filter-text online_payment with-icon">在线支付<span class="new_icon"></span></span> </span> 
                                               <span class="filter-btn activity-filter" pinyin="chaoshipeifu" ubt-change="filter_chaoshipeifu"> <input type="checkbox" name="filter" /><span class="filter-text chaoshipeifu with-icon">超时赔付</span> </span> 
                                               <div class="flavorblock"> 
                                                    <div class="flavor-dropdown-toggle" data-toggle="dropdown">
                                                     <a>口味<b class="caret"></b></a>
                                                    </div> 
                                                    <ul class="flavor-dropdown-menu" style="display:none"> 
                                                       <li class="flavor all filter-btn"><a>全部</a></li> 
                                                       <li class="flavor filter-btn flavor-filter" pinyin="zhongshi"> <a>中式</a> </li> 
                                                       <li class="flavor filter-btn flavor-filter" pinyin="xishi"> <a>西式</a> </li> 
                                                       <li class="flavor filter-btn flavor-filter" pinyin="gangshi"> <a>港式</a> </li> 
                                                       <li class="flavor filter-btn flavor-filter" pinyin="naichahanbao"> <a>奶茶</a> </li> 
                                                       <li class="flavor filter-btn flavor-filter" pinyin="shaokao"> <a>烧烤</a> </li> 
                                                       <li class="flavor filter-btn flavor-filter" pinyin="rishi"> <a>日式</a> </li> 
                                                       <li class="flavor filter-btn flavor-filter" pinyin="hanshi"> <a>韩式</a> </li> 
                                                       <li class="flavor filter-btn flavor-filter" pinyin="tiandian"> <a>甜点</a> </li> 
                                                       <li class="flavor filter-btn flavor-filter" pinyin="hanbao"> <a>汉堡</a> </li> 
                                                    </ul> 
                                               </div> 
                                               <div class="deliver-slider-wrapper "> 
                                                    <span id="deliver-amount-level">全部</span> 
                                                    <div class="slider-wrapper"> 
                                                     <div id="geo_deliver_slider" class="deliver-slider ui-eleme slider tool-tip" title="起送价" level="4" max="4" min="1"></div> 
                                                    </div> 
                                                    <span>起送价</span> 
                                               </div> 
                                          </div> 
                                     </div> 
                                 <!--<div class="span2">
                                              </div>--> 
                                </div> 
                           </div> 
                           <div class="span12 category-restaurant-header with-restaurant-filter area-activities"> 
                                <div class="area-activities-other"> 
                                     <span class="filter-btn activity-filter" pinyin="Activity_14337"> <input type="checkbox" name="filter" /><span class="filter-text Activity_14337">闪电红包</span> </span> 
                                     <span class="filter-btn activity-filter" pinyin="new_user_discount"> <input type="checkbox" name="filter" /><span class="filter-text new_user_discount">首次下单立减</span> </span> 
                                     <span class="filter-btn activity-filter" pinyin="extra_discount"> <input type="checkbox" name="filter" /><span class="filter-text extra_discount">满立减</span> </span> 
                                </div> 
                           </div> 
                           <div class="span12"> 
                              <table class="restaurant-list-table"> 
                                 <tbody> 
                                    <tr> 
                                       <td> 
                                          <div class="restaurant-block  " id="restaurant-31767" rel="31767" data-restaurantid="31767"> 
                                             <div class="favor-book"> 
                                                <span class="favor-icon hidden"></span> 
                                                <a href="#" class="hover-add-favor hidden entry-favor" rel="31767">收藏</a> 
                                                <a href="#" class="hover-un-favor hidden entry-un-favor" rel="31767">取消收藏</a> 
                                             </div> 
                                             <div class="line-one"> 
                                                <div class="logo-wrapper"> 
                                                   <div class="logo"> 
                                                      <div class="conform-logo-person"></div> 
                                                      <a href="http://r.ele.me/pt-jiachangcaiguan" target="_blank"><img class="restaurant-logo" alt="家常菜馆" srcset="http://fuss10.elemecdn.com/1/58/0d222209ec79983459a9d032acb62jpeg.jpeg?w=42&amp;h=42 1x, http://fuss10.elemecdn.com/1/58/0d222209ec79983459a9d032acb62jpeg.jpeg?w=84&amp;h=84 2x" /></a> 
                                                   </div> 
                                                   <div class="deliver-time-wrapper busy tooltip_on" data-toggle="tooltip" title="餐厅送餐时间超过45分钟">
                                                     45+分钟 
                                                   </div> 
                                                </div> 
                                                <div class="info"> 
                                                     <div class="name"> 
                                                      <a class="restaurant-link" href="shop_detail" target="_blank">家常菜馆</a> 
                                                     </div> 
                                                     <div class="flavors ">
                                                       中式 
                                                     </div> 
                                                     <div class="ratings "> 
                                                        <div class="r9 rating-star" title="餐厅评价：4.4星"></div> 
                                                        <span class="rating-number">8577份</span> 
                                                     </div> 
                                                     <div class="icons"> 
                                                        <span class="restaurant-icons online-payment tooltip_on" data-toggle="tooltip" title="该餐厅支持在线支付">&nbsp;</span> 
                                                        <span class="restaurant-icons extra-discount tooltip_on" data-toggle="tooltip" title="在线支付满20减10">&nbsp;</span> 
                                                        <span class="restaurant-icons new-user-discount tooltip_on" data-toggle="tooltip" title="饿了么新用户在该餐厅下首单，可立减15元">&nbsp;</span> 
                                                     </div> 
                                                </div> 
                                             </div> 
                                           <div class="hidden line-hover-dlg" id="restaurant-hover-dlg-content-31767"> 
                                              <div class="restaurant-panel"> 
                                                 <span class="favor-icon hidden"></span> 
                                                 <div class="restaurant-more-info"> 
                                                    <div style="font-size:15px; margin-left:10px;">
                                                     家常菜馆
                                                    </div> 
                                                    <div class="divider hidden"></div> 
                                                    <ul class="icons"> 
                                                       <li> <img class="restaurant-icons certification" title="该商家已通过个人身份认证" src="home/images/passIcon_s_01.png?v=1" /> <span class="desc" title="">该商家已通过个人身份认证</span> </li> 
                                                       <li> <span class="restaurant-icons online-payment" title="该餐厅支持在线支付">&nbsp;</span> <span class="desc" title="">该餐厅支持在线支付</span> </li> 
                                                       <li> <span class="restaurant-icons extra-discount" title="在线支付满20减10">&nbsp;</span> <span class="desc" title="">在线支付满20减10</span> </li> 
                                                       <li> <span class="restaurant-icons new-user-discount" title="饿了么新用户在该餐厅下首单，可立减15元">&nbsp;</span> <span class="desc" title="">饿了么新用户在该餐厅下首单，可立减15元</span> </li> 
                                                    </ul> 
                                                    <div class="divider hidden"></div> 
                                                    <p class="ann"><strong>公告:</strong>&nbsp;美食配送均需要时间，为了不影响您的及时用餐，请大家提前一小时预订，如遇特殊天气请提前至少1-2小时预订。避开订餐高峰期！下订单后请确认地址是否正确，若送去地址错误的加收3—5元外送费！望理解！ 早上10点前下单，且满100元可赠大饮料一瓶。 另本店可提供团体订餐，欢迎来电咨询</p> 
                                                    <p class="restaurant-deliver-desc"><strong>起送价:</strong>&nbsp;到登科保洁(长寿路店) 16元。 （额外说明：周六周日八点半开始送)</p> 
                                                    <p><strong>地址:</strong>&nbsp;西康路1391号</p> 
                                                    <p><strong>营业时间:</strong>&nbsp;08:00 - 23:00</p> 
                                                    <p><strong>简介:</strong>&nbsp;本店以家常菜为主，欢迎预订！百元以上订单请至少提前1至三个小时预订！</p> 
                                                 </div> 
                                              </div> 
                                           </div> 
                                          </div> 
                                       </td> 
                                    </tr>
                                  </tbody> 
                              </table> 
                           </div> 
                      </div> 
                   </div> 
                </div> 
                 
                
                
                <div id="modal-add-favor" class="modal hide fade" aria-hidden="true" tabindex="-1"> 
                   <div class="modal-header"> 
                      <a href="#" class="close" aria-hidden="true">&times;</a> 
                      <h3>收藏你喜欢的餐厅</h3> 
                   </div> 
                   <div class="modal-body"> 
                   </div> 
                   <div class="modal-footer"> 
                      <a href="#" class="btn btn-yellow complete">完成收藏</a> 
                   </div> 
                </div> 
                <div id="copy_dlg_restaurant" class="restaurant-hover-dlg right hidden"> 
                   <div class="wrapper dark_shadow"> 
                      <div class="callout_tip"></div> 
                      <div class="detail"> 
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
                <script type="text/javascript"> _gaq.push(['_trackEvent', 'view_place', 'forward', '-615736186413943440']);</script> 
             </div> 
             
             <div id="modal_globalLogin" class="modal-global-login modal hide fade" aria-hidden="true" tabindex="-1"> 
                <a class="close" aria-hidden="true">&times;</a> 
                <iframe class="ilogin-iframe login_frame" src="https://account.ele.me/ilogin" frameborder="0" scrolling="no"></iframe> 
             </div> 
         
@endsection