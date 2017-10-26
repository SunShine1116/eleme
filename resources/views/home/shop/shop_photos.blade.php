@extends('home.public.parentd')
@section('content') 
  <div id="wall_wrap" class="container"> 
   <div id="fixed_placeholder" class="rst-subnav-placeholder"> 
    <div id="sub_nav" class="rst-block rst-subnav-wrapper full-width group"> 
     <a class="rst-subnav sort_btn ui_active" data-method="like">图片最赞</a> 
     <a class="rst-subnav sort_btn" data-method="sales">销量最高</a> 
     <a class="rst-subnav sort_btn" data-method="rating">评价最好</a> 
     <a class="rst-subnav sort_btn" data-method="price">价格最低</a> 
     <div class="photo-guide-panel photo-wall"> 
      <div class="rst-subnav photo-guide-toggle">
       <i class="icon-photoman"></i>
       <span class="text">拍照片拿积分</span>
      </div> 
      <div class="photo-guide-dropdown"> 
       <div class="photo-guide-wrapper group"> 
        <div class="photo-guide"> 
         <img src="images/photo-guide.1c780890.png" alt="流程" /> 
         <ol class="photo-guide-flow group"> 
          <li class="step step1">下单收到外卖打开手机应用</li> 
          <li class="step step2">用「美食相机」拍照<span class="highlight">赚20积分</span></li> 
         </ol> 
        </div> 
        <div class="photo-guide-qr"> 
         <img src="images/app-qrcode.20cdda49.png" alt="http://m.ele.me/dapp" /> 
        </div> 
       </div> 
      </div> 
     </div> 
    </div> 
   </div> 
   <div id="food_wrap" class="photo-wall group"> 
    <div id="wall_view_9957939" class="rst-block album-block eleme_view"> 
     <a class="album-cover food_cover"> <img class="album-cover-img food_img" srcset="http://fuss10.elemecdn.com/9/63/0a26c19f5de3605c9b82b41206ddfjpeg.jpeg?w=275&amp;h=275 1x, http://fuss10.elemecdn.com/9/63/0a26c19f5de3605c9b82b41206ddfjpeg.jpeg?w=550&amp;h=550 2x" alt="酸辣大锅鱼" title="酸辣大锅鱼" /> </a> 
     <a class="dish-favor favor_btn" title="收藏">♥</a> 
     <a class="photo-like like_btn" title="给这张图片点赞"> 赞<span class="photo-like-count like_count ui_hide">0</span> </a> 
     <div class="album-dish"> 
      <div class="album-dish-name food_name" title="酸辣大锅鱼" data-id="9957939">
       酸辣大锅鱼
      </div> 
      <div class="album-dish-rating"> 
       <i class="icon-d-star s0"></i>
      </div>
      <div class="album-dish-sale">
       <img class="icon-rst-badge" src="images/d016d4bae7764d14ad6786b549a4agif.gif" title="在线支付来分享，饿了么1亿红包重磅来袭" alt="在线支付来分享，饿了么1亿红包重磅来袭" />月售2份
      </div>
      <div class="rst-d-action r_d_a">
       <div class="unavailable symbol-rmb">
        20
        <br />
        <span class="status">餐厅休息</span>
       </div>
      </div>
     </div> 
    </div> 
    

  
   <div class="rst-block photo-wall-loading ui_hide">
    正在加载更多…
   </div> 
   <div id="rst_cart" class="restaurant-cart"></div> 
  </div> 
  <div id="modal_photo" class="bs-modal fade" tabindex="-1" role="dialog" aria-hidden="true" data-keyboard="false"> 
   <div class="bs-modal-dialog rst-photo-modal"> 
    <div class="bs-modal-content"> 
     <div class="bs-modal-header group food_info_wrap"> 
      <a class="bs-close" data-dismiss="bs-modal" aria-hidden="true">&times;</a> 
     </div> 
     <div class="bs-modal-body"> 
      <div class="photo-block-wrapper photo_list"></div> 
      <div class="rst-block photo-wall-loading load_more ui_hide">
       正在加载更多…
      </div> 
     </div> 
    </div> 
   </div> 
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
   <!-- 在线客服图标:在线客服 结束--> 
  </div> 
  
  <script>
    var wallFoods = [{"rating": 0, "description": "\u5927\u9505\u3001\u914d\u9c7c\u3001\u767d\u83dc\u3001\u9171\u3001\u6d0b\u828b\u3001\u7c89\u6761\u3001\u767d\u8c46\u8150\u3001\u6ce1\u6912\u300120\u5143\u6bcf\u65a4\u3001\u7ecf\u6d4e\u5b9e\u6075\uff01", "restaurant_id": 120275, "sales": 2, "num_ratings": [0, 0, 0, 0, 0], "ratingCount": 0, "id": 9957939, "count": 1, "cover_update": 1417595023, "name": "\u9178\u8fa3\u5927\u9505\u9c7c", "cover": {"image": "/9/63/0a26c19f5de3605c9b82b41206ddfjpeg.jpeg", "like_count": 0, "id": 2311762}, "activity": {"categ": "\u95ea\u7535\u7ea2\u5305", "mustNewUser": 0, "description": "\u5728\u7ebf\u652f\u4ed8\u6765\u5206\u4eab\uff0c\u997f\u4e86\u4e481\u4ebf\u7ea2\u5305\u91cd\u78c5\u6765\u88ad", "activityIcons": [{"url": "/d/1a/d016d4bae7764d14ad6786b549a4agif.gif", "desc": "\u5728\u7ebf\u652f\u4ed8\u6765\u5206\u4eab\uff0c\u997f\u4e86\u4e481\u4ebf\u7ea2\u5305\u91cd\u78c5\u6765\u88ad"}], "mustPayOnline": 0, "categId": "activity_14337", "isActivity": true, "activityImages": ["/b/0f/75678d1115f97b583b945607b81a5gif.gif"]}, "attributes": [], "price": 20.0, "stock": 9890}, {"rating": 0, "description": "\u914d\u6599\uff1a\u9c9c\u9e21\u811a\u3001\u9ec4\u74dc\u3001\u7ea2\u841d\u535c\u3001\u5c0f\u7c73\u8fa3\u3001\u67e0\u6aac\u3002\u5473\u8fa3\u9178\u6e05\u9999\u3001\u53e3\u611f\u6e05\u8106\uff0c\u4e0b\u9152\u795e\u5668\u3002", "restaurant_id": 120275, "sales": 8, "num_ratings": [0, 0, 0, 0, 0], "ratingCount": 0, "id": 9898522, "count": 1, "cover_update": 1417161431, "name": "\u8202\u9e21\u811a", "cover": {"image": "/9/48/800784951c1aafc91d9d1b169d55bjpeg.jpeg", "like_count": 0, "id": 2207326}, "activity": {"categ": "\u95ea\u7535\u7ea2\u5305", "mustNewUser": 0, "description": "\u5728\u7ebf\u652f\u4ed8\u6765\u5206\u4eab\uff0c\u997f\u4e86\u4e481\u4ebf\u7ea2\u5305\u91cd\u78c5\u6765\u88ad", "activityIcons": [{"url": "/d/1a/d016d4bae7764d14ad6786b549a4agif.gif", "desc": "\u5728\u7ebf\u652f\u4ed8\u6765\u5206\u4eab\uff0c\u997f\u4e86\u4e481\u4ebf\u7ea2\u5305\u91cd\u78c5\u6765\u88ad"}], "mustPayOnline": 0, "categId": "activity_14337", "isActivity": true, "activityImages": ["/b/0f/75678d1115f97b583b945607b81a5gif.gif"]}, "attributes": [], "price": 20.0, "stock": 9951}, {"rating": 0, "description": "\u914d\u79d8\u5236\u9171\u6599\u3001\u97ed\u83dc\u3001\u767d\u83dc\u3001\u9999\u80a0\u3001\u9c9c\u9762\u716e\u719f\u3001\u7206\u7092\u4e0a\u76d8\u5373\u53ef\u3002\u9171\u5473\u97ed\u83dc\u9999\u5473\u3001\u9999\u6ed1\u723d\u53e3\u3002", "restaurant_id": 120275, "sales": 22, "num_ratings": [0, 0, 0, 0, 0], "ratingCount": 0, "id": 9898520, "count": 1, "cover_update": 1420434634, "name": "\u7092\u9762", "cover": {"image": "/7/33/4b5a5d59621493e0b2e1a3c4780acjpeg.jpeg", "like_count": 0, "id": 3214192}, "activity": {"categ": "\u95ea\u7535\u7ea2\u5305", "mustNewUser": 0, "description": "\u5728\u7ebf\u652f\u4ed8\u6765\u5206\u4eab\uff0c\u997f\u4e86\u4e481\u4ebf\u7ea2\u5305\u91cd\u78c5\u6765\u88ad", "activityIcons": [{"url": "/d/1a/d016d4bae7764d14ad6786b549a4agif.gif", "desc": "\u5728\u7ebf\u652f\u4ed8\u6765\u5206\u4eab\uff0c\u997f\u4e86\u4e481\u4ebf\u7ea2\u5305\u91cd\u78c5\u6765\u88ad"}], "mustPayOnline": 0, "categId": "activity_14337", "isActivity": true, "activityImages": ["/b/0f/75678d1115f97b583b945607b81a5gif.gif"]}, "attributes": [], "price": 10.0, "stock": 9788}, {"rating": 0, "description": "\u592a\u8fa3\u3001\u6700\u8fa3\u3001\u60f3\u53d1\u706b\uff01", "restaurant_id": 120275, "sales": 27, "num_ratings": [0, 0, 0, 0, 0], "ratingCount": 0, "id": 12859410, "count": 2, "cover_update": 1420541256, "name": "\u5c0f\u7c73\u8fa3\u725b\u8089\u7092\u996d", "cover": {"image": "/5/d5/90eac2d6fd42309e1d67b82b5ca58jpeg.jpeg", "like_count": 0, "id": 3275155}, "attributes": [], "price": 10.0, "stock": 9859}, {"rating": 5.0, "description": "\u7d20\u98df\uff0c\u914d\u6599\u9999\u83c7\u3001\u897f\u7ea2\u67ff\u3001\u8c46\u8fa8\u9171\u3001\u6d0b\u8471\uff0c\u9171\u9999\u6d53\u5473\u751c\u3001\u914d\u9178\u6ce1\u83dc\uff0c\u53ef\u4ee5\u4e00\u54c1\u3002", "restaurant_id": 120275, "sales": 45, "num_ratings": [0, 0, 0, 0, 1], "ratingCount": 1, "id": 9898519, "count": 3, "cover_update": 1420359848, "name": "\u70b8\u9171\u9762", "cover": {"image": "/3/0b/8024da3ffe5cc0b4306a5bad2cae8jpeg.jpeg", "like_count": 0, "id": 3180978}, "activity": {"categ": "\u95ea\u7535\u7ea2\u5305", "mustNewUser": 0, "description": "\u5728\u7ebf\u652f\u4ed8\u6765\u5206\u4eab\uff0c\u997f\u4e86\u4e481\u4ebf\u7ea2\u5305\u91cd\u78c5\u6765\u88ad", "activityIcons": [{"url": "/d/1a/d016d4bae7764d14ad6786b549a4agif.gif", "desc": "\u5728\u7ebf\u652f\u4ed8\u6765\u5206\u4eab\uff0c\u997f\u4e86\u4e481\u4ebf\u7ea2\u5305\u91cd\u78c5\u6765\u88ad"}], "mustPayOnline": 0, "categId": "activity_14337", "isActivity": true, "activityImages": ["/b/0f/75678d1115f97b583b945607b81a5gif.gif"]}, "attributes": [], "price": 6.0, "stock": 9581}, {"rating": 0, "description": "\u65e0\u8fa3\u5473\u3001\u725b\u5e72\u5df4\u914d\u9752\u83dc\uff0c\u6709\u70b9\u602a\uff01", "restaurant_id": 120275, "sales": 2, "num_ratings": [0, 0, 0, 0, 0], "ratingCount": 0, "id": 9940374, "count": 2, "cover_update": 1420196696, "name": "\u725b\u5e72\u5df4\u9752\u83dc\u7092\u996d", "cover": {"image": "/1/e9/70723d40c4ee35346038128bf7240jpeg.jpeg", "like_count": 0, "id": 3120050}, "attributes": [], "price": 10.0, "stock": 9881}, {"rating": 3.0, "description": "\u914d\u6599\uff1a\u706b\u817f\u8089\u3001\u6d0b\u828b\u3001\u7ea2\u841d\u535c\u3001\u9c9c\u83dc\u3001\u9999\u80a0\u3001\u706b\u817f\u80a0\u3002\u814a\u8089\u5473\u9999\u6d53\u3001\u914d\u6ce1\u83dc\u3001\u4e0b\u996d\uff01", "restaurant_id": 120275, "sales": 70, "num_ratings": [0, 0, 1, 0, 0], "ratingCount": 1, "id": 9898521, "count": 2, "cover_update": 1420606838, "name": "\u7802\u9505\u996d", "cover": {"image": "/b/8f/b10dcc0b07451e9e5107461c2eaffjpeg.jpeg", "like_count": 0, "id": 3301578}, "activity": {"categ": "\u95ea\u7535\u7ea2\u5305", "mustNewUser": 0, "description": "\u5728\u7ebf\u652f\u4ed8\u6765\u5206\u4eab\uff0c\u997f\u4e86\u4e481\u4ebf\u7ea2\u5305\u91cd\u78c5\u6765\u88ad", "activityIcons": [{"url": "/d/1a/d016d4bae7764d14ad6786b549a4agif.gif", "desc": "\u5728\u7ebf\u652f\u4ed8\u6765\u5206\u4eab\uff0c\u997f\u4e86\u4e481\u4ebf\u7ea2\u5305\u91cd\u78c5\u6765\u88ad"}], "mustPayOnline": 0, "categId": "activity_14337", "isActivity": true, "activityImages": ["/b/0f/75678d1115f97b583b945607b81a5gif.gif"]}, "attributes": [], "price": 12.0, "stock": 9927}, {"rating": 4.5, "description": "\u7ea2\u70e7\u725b\u8089\u3001\u4e0d\u8fa3\u3001\u914d\u897f\u7ea2\u67ff\u3001\u8471\u6cac\u3001\u9ad8\u6c64\u52fa\u6b20\u3002", "restaurant_id": 120275, "sales": 83, "num_ratings": [0, 0, 0, 1, 1], "ratingCount": 2, "id": 9940099, "count": 2, "cover_update": 1419506496, "name": "\u7ea2\u70e7\u725b\u8089\u76d6\u996d", "cover": {"image": "/0/23/07bb9e1879d42ba3cdf3ef39d3441jpeg.jpeg", "like_count": 0, "id": 2891993}, "attributes": [], "price": 10.0, "stock": 9352}];
    var wallRenderIndex = 7;
  </script> 
  @endsection