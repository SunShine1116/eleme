@extends('home.public.parent')
@section('content') 
             <example>
             <div class="container"> 
                <nav class="breadcrumb" data-geohash="wtw3equp">
                  登科保洁(长寿路店) 
                 <a class="breadcrumb-switch" href="city">[切换地址]</a> 
                </nav> 
                <div id="promotion_banner" class="promotion-banner"> 
                     <ul id="promotion_carousel" class="carousel-wrapper"> 
                        <li class="carousel-block"> <a rel="nofollow" target="_blank" href="/activity/100millon-bonus" data-id="promotion_banner_100millon-bonus"> <img src="{{ asset('home/images/49c76d8868522e2793b74844b5914gif.gif') }}" /> </a> </li> 
                        <li class="carousel-block"> <a rel="nofollow" target="_blank" href="/activity/cyzxff20150312" data-id="promotion_banner_cyzxff20150312"> <img src="{{ asset('home/images/795627d940d71323855b99bf36685gif.gif') }}" /> </a> </li> 
                        <li class="carousel-block"> <a rel="nofollow" target="_blank" href="/activity/xnbonus_2015" data-id="promotion_banner_xnbonus_2015"> <img src="{{ asset('home/images/24afab59cadeac87ec23a51fe5e8dgif.gif') }}" /> </a> </li> 
                        <li class="carousel-block"> <a rel="nofollow" target="_blank" href="/activity/pinpaiguan1" data-id="promotion_banner_pinpaiguan1"> <img src="{{ asset('home/images/44b92f52c342fe1994164399fd870gif.gif') }}" /> </a> </li> 
                        <li class="carousel-block"> <a rel="nofollow" target="_blank" href="/activity/sdjb" data-id="promotion_banner_sdjb"> <img src="{{ asset('home/images/10ea2f228dce4ef61c56c52ae5f9agif.gif') }}" /> </a> </li> 
                     </ul> 
                     <ol class="carousel_pager carousel-pager"></ol> 
                </div> 
                <div class="row favored-restaurants restaurants-row" id="favored-bar"> 
                     <div class="span12 row-wrapper"> 
                          <div class="row"> 
                               <div class="span12 category-restaurant-header"> 
                                <span class="title">我的收藏</span> 
                                <span class="right-action"><a href="member_collect_shop">设置</a></span> 
                               </div> 
                               <div class="span12" id="favored-restaurants"> 
                                    <table class="restaurant-list-table zebra-striped1"> 
                                         <tbody> 
                                              <tr> 
                                                   @foreach ($collection as $v)
                                                   <td> 
                                                        <div class="restaurant-block lite"> 
                                                             <div class="add-favor">
                                                              {{ $v->sid }}
                                                             </div>
                                                        </div>
                                                   </td> 
                                                   @endforeach
                                              </tr> 
                                         </tbody> 
                                    </table> 
                               </div> 
                          </div> 
                     </div> 
                </div> 
                <div class="row more-restaurants restaurants-row"> 
                   <div class="span12 row-wrapper"> 
                      <div class="row"> 
                           <div class="span12 category-restaurant-header"> 
                            <span class="category-restaurant-block"> <a target="_blank" href="/premium/geohash/wtw3equpdm3g">前往 <span class="p-entrance-total" style="color: #fe6000;font: normal 20px/1em Arial,'Helvetica Neue',sans-serif;">69</span> 家品牌餐厅</a> <img src="home/images/deliver-icon.png" /> </span> 
                           </div> 
                           <div class="span12"> 
                              <table class="restaurant-list-table more-restaurant-table"> 
                                 <tbody> 
                                    <tr>
                                       <td> 
                                          <div class="restaurant-block closed " id="restaurant-46798" rel="46798" data-restaurantid="46798"> 
                                             <div class="favor-book"> 
                                                <span class="favor-icon hidden"></span> 
                                                <a href="#" class="hover-add-favor hidden entry-favor" rel="46798">收藏</a> 
                                                <a href="#" class="hover-un-favor hidden entry-un-favor" rel="46798">取消收藏</a> 
                                             </div> 
                                             <div class="line-one"> 
                                                <div class="logo-wrapper"> 
                                                   <div class="logo"> 
                                                    <a href="http://r.ele.me/ja-hbw1" target="_blank"><img class="restaurant-logo" alt="汉堡王(愚园路店)" srcset="http://fuss10.elemecdn.com/0/3f/9a89983088715705f28999e9ee314png.png?w=42&amp;h=42 1x, http://fuss10.elemecdn.com/0/3f/9a89983088715705f28999e9ee314png.png?w=84&amp;h=84 2x" /></a> 
                                                   </div> 
                                                   <div class="deliver-time-wrapper tooltip_on" data-toggle="tooltip" title="平均送餐时间:43分钟">
                                                     43分钟 
                                                   </div> 
                                                </div> 
                                                <div class="info"> 
                                                   <div class="name"> 
                                                      <a class="restaurant-link" href="shop_detail" target="_blank">汉堡王(愚园路..</a> 
                                                   </div> 
                                                   <div class="status-label closed"> 
                                                      <span>休息中</span> 
                                                   </div> 
                                                   <div class="status-desc closed"> 
                                                      <span title="已打烊，明天 10:00 开始订餐">已打烊</span> 
                                                   </div> 
                                                </div> 
                                             </div> 
                                             <div class="hidden line-hover-dlg" id="restaurant-hover-dlg-content-46798"> 
                                                <div class="restaurant-panel"> 
                                                   <span class="favor-icon hidden"></span> 
                                                   <div class="restaurant-more-info"> 
                                                      <div style="font-size:15px; margin-left:10px;">
                                                        汉堡王(愚园路店)
                                                      </div> 
                                                      <p class="closed"><span title="已打烊，明天 10:00 开始订餐">已打烊，明天 10:00 开始订餐</span></p> 
                                                      <div class="divider hidden"></div> 
                                                      <ul class="icons"> 
                                                         <li> <img class="restaurant-icons 9.9元皇堡" title="凡进入饿了么品牌馆汉堡王餐厅内选择带有99的餐品，可以以9.9元的价格购买原价22元的皇堡一份，每个用户每单限点1份，每个用户每天限点3次（此活动新老用户皆可参与）" src="home/images/15255ecfb5364e36985c613f0b26cgif.gif" /> 
                                                            <span class="desc" title="">凡进入饿了么品牌馆汉堡王餐厅内选择带有99的餐品，可以以9.9元的价格购买原价22元的皇堡一份，每个用户每单限点1份，每个用户每天限点3次（此活动新老用户皆可参与）
                                                            </span> 
                                                         </li> 
                                                         <li> 
                                                            <span class="restaurant-icons deliver-fee" title="该餐厅订餐需支付配送费5元">&nbsp;</span> 
                                                            <span class="desc" title="">该餐厅订餐需支付配送费5元</span> 
                                                         </li> 
                                                         <li> 
                                                            <span class="restaurant-icons recoup" title="该餐厅参加超时赔付活动，超90分钟5折。预订单，不参加超时赔付！如遇恶劣环境，如下雨，冰雹等天气，或人力不可抗拒因素！此单不参加超时赔付！">&nbsp;</span> 
                                                            <span class="desc" title="">该餐厅参加超时赔付活动，超90分钟5折。预订单，不参加超时赔付！如遇恶劣环境，如下雨，冰雹等天气，或人力不可抗拒因素！此单不参加超时赔付！
                                                            </span> 
                                                         </li> 
                                                         <li> 
                                                            <span class="restaurant-icons invoice" title="该餐厅支持开发票，请在下单时填写好发票抬头">&nbsp;</span> 
                                                            <span class="desc" title="">该餐厅支持开发票，请在下单时填写好发票抬头</span> 
                                                         </li> 
                                                      </ul> 
                                                      <div class="divider hidden"></div> 
                                                      <p class="ann"><strong>公告:</strong>&nbsp; 饿了么品牌馆承诺，您的餐品60分钟内送达。如送餐时间超过70分钟,此单7折、超过90分钟,此单5折！超时打折不包含预订单！订餐须知—1:请确保您的电话畅通，以便送餐员能及时联系上您。2:美食烹饪+餐品配送需要一定的时间，为了确保您能及时用餐，希望您提前30分钟以上时间预定下单，避开高峰时期。饿了么【品牌馆咨询专线】：021-52657757 </p> 
                                                      <p class="restaurant-deliver-desc"><strong>起送价:</strong>&nbsp;到登科保洁(长寿路店) 30元。 （额外说明：)</p> 
                                                      <p><strong>地址:</strong>&nbsp;静安区愚园路132号</p> 
                                                      <p><strong>营业时间:</strong>&nbsp;10:00 - 20:30</p> 
                                                      <p><strong>简介:</strong>&nbsp;Taste is King！Home of the WHOPPER！</p> 
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
                <div class="geoplace-activities clearfix" data-v5-host="v5.ele.me"> 
                   <a class="gp-activity-block" rel="nofollow" onclick="_gaq.push(['_trackEvent', 'middle-activities', 'click', 'hot_foods']);" target="_blank" href="http://ele.me/entry/findhotfood" id="activity-hot_foods"><img src="{{ asset('home/images/4f1385094a51bc1816c65b3ea6da9gif.gif') }}" title="热卖美食" /></a> 
                   <a class="gp-activity-block" rel="nofollow" onclick="_gaq.push(['_trackEvent', 'middle-activities', 'click', 'try_order_flow']);" target="_blank" href="http://ele.me/31265430" id="activity-try_order_flow"><img src="{{ asset('home/images/ca212e55bbfb137346e429de97fb8gif.gif') }}" title="体验订餐流程" /></a> 
                   <a class="gp-activity-block" rel="nofollow" onclick="_gaq.push(['_trackEvent', 'middle-activities', 'click', 'mobile_app']);" target="_blank" href="mobile.html" id="activity-mobile_app"><img src="{{ asset('home/images/fe03c44f1fab3448d2df24625da50gif.gif') }}" title="mobile_app" /></a> 
                   <a class="gp-activity-block" onclick="_gaq.push(['_trackEvent', 'middle-activities', 'click', 'shuiqunawaimai']);" title="谁去拿外卖" id="activity-shuiqunawaimai"><img src="{{ asset('home/images/0728055c786e1f250b783a0386a34gif.gif') }}" title="谁去拿外卖" /></a> 
                   <a class="gp-activity-block" rel="nofollow" onclick="_gaq.push(['_trackEvent', 'middle-activities', 'click', 'faq']);" target="_blank" href="help.html" id="activity-faq"><img src="{{ asset('home/images/4dfa08f216bf0bf39978f3d193855gif.gif') }}" title="常见问题" /></a> 
                </div> 
                <div style="border-left: 2px solid #f5f5f5; box-shadow: 0 1px 2px rgba(0, 0, 0, 0.3); margin: 0 -2px 15px 0;"> 
                   <div class="category-restaurant-header">
                      <span class="title">附近团购</span>
                   </div> 
                   <div style="background: #fff;"> 
                      <iframe src="http://eleme.expc.dianping.com/site/frame/near_deals?latitude=31.239567&amp;longitude=121.437477&amp;count=5" frameborder="0" scrolling="no" style="width:100%; height:92px; display: block;"></iframe> 
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
             <div id="site_fixed" class="site-fixed"> 
                <a id="back_top" class="btn-back-top ui_invisible" role="button" title="回顶部"><i class="icon-backtop"></i></a> 
                <div class="btn-app-qrcode"> 
                   <i class="icon-qrcode"></i> 
                   <img class="img-qrcode" src="home/images/app-qrcode.png" alt="扫描二维码免费下载手机App" /> 
                </div> 
                <a class="btn-setup-shop" href="http://kaidian.ele.me" target="_blank">我要开店</a> 
                <a class="btn-setup-shop" href="help.html" target="_blank">热门问题</a> 
                <!-- Live800在线客服图标:在线客服[文本图标] 开始--> 
                <a class="btn-setup-shop" id="customerservice" target="_blank" href="support">在线客服</a> 
                
                <!-- 在线客服图标:在线客服 结束--> 
             </div> 
             <div id="modal_globalLogin" class="modal-global-login modal hide fade" aria-hidden="true" tabindex="-1"> 
                <a class="close" aria-hidden="true">&times;</a> 
                <iframe class="ilogin-iframe login_frame" src="https://account.ele.me/ilogin" frameborder="0" scrolling="no"></iframe> 
             </div> 
          </example>
@endsection