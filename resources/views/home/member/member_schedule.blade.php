@extends('home.public.parents')
@section('content')
     <div class="main-content"> 
      <div class="content-header"> 
       <h2>查看交易明细</h2> 
      </div>
      <!--end content-header--> 
      <div class="content-inner"> 
       <div id="trade_record_filter" class="trade-record-filter"> 
        <p>分类： <span class="trade-record-filter-lineone"><a class="active" href="member_schedule.html">全部</a></span> <span><a href="/profile/records/category/takeout">叫外卖</a></span> <span><a href="/profile/records/category/charge">充值</a></span> <span><a href="/profile/records/category/refund">退单</a></span> </p> 
        <p>日期： <span class="trade-record-filter-lineone"><a href="/profile/records/date/today">今天</a></span> <span><a href="/profile/records/date/7days">近7天</a></span> <span><a href="/profile/records/date/15days">近15天</a></span> <span><a href="/profile/records/date/1month">1个月</a></span> </p> 
        <p>状态： <span class="trade-record-filter-lineone"><a class="active" href="member_schedule.html">全部</a></span> <span><a href="/profile/records/status/processing">进行中</a></span> <span><a href="/profile/records/status/success">成功</a></span> <span><a href="/profile/records/status/fail">失败</a></span> </p> 
       </div>
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