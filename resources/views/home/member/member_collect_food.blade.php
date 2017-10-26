 @extends('home.public.parents')
@section('content')
  
     
     <div class="main-content"> 
      <div class="content-header"> 
       <h2>我收藏的美食 - 共7个</h2> 
      </div> 
      <div class="content-inner"> 
       <table class="favor_table table table-striped"> 
        <thead> 
         <tr> 
          <th>美食</th> 
          <th>所属餐厅</th> 
          <th>单价</th> 
          <th>订购</th> 
          <th>人气</th> 
          <th>删除</th> 
         </tr> 
        </thead> 
        <tbody> 
         <tr class="favor_food"> 
            <td>炝炒油麦菜盖饭</td> 
            <td><a href="http://r.ele.me/hd-cxykc">川湘缘快餐</a></td> 
            <td>8元</td> 
            <td>食物已下架</td> 
            <td>月售0份</td> 
            <td> 
              <span class="admin_del" foodid="1238154"> <a href="javascript:;">删除</a> </span> 
            </td> 
         </tr> 
         </tbody> 
       </table> 
       <div> 
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