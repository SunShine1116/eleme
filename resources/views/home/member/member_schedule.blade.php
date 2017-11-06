@extends('home.public.parents')
@section('content')
     <div class="main-content"> 
      <div class="content-header"> 
       <h2>查看交易明细</h2> 
      </div>
      <!--end content-header--> 
      <div class="content-inner"> 
      
       <!--end trade_record_filter--> 
       <table class="table table-striped records-table"> 
        <thead> 
         <tr> 
          <th>创建时间</th> 
          <th width="15%">交易类型</th> 
          <th width="35%">交易详情</th> 
          <th class="amount">金额</th> 
          <th>交易状态</th> 
         </tr> 
        </thead> 
        <tbody> 
         <tr>
          <td colspan="5" class="profile-no-result"><p>没有您要搜索的结果～</p></td>
         </tr> 
        </tbody> 
       </table> 
      </div>
      <!--end content-inner--> 
      <div> 
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