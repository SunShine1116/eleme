@extends('home.public.parents')
@section('content')
     <div class="main-content"> 
      <div class="content-header"> 
       <h2>管理我的地址</h2> 
      </div> 
      <div class="content-inner profile-address"> 
       <h3>已经保存的送餐地址</h3> 
       <table class="address-table table table-bordered"> 
        <thead> 
         <tr> 
          <th class="col-address">地址</th> 
          <th class="col-phone">手机号码</th> 
          <th class="col-phone-bk">备选电话</th> 
          <th class="col-action">操作</th> 
         </tr> 
        </thead> 
        <tbody> 
         <tr class="stable_address"> 
          <td class="col-address">中山北路1655弄 29支弄宝钢公寓 11号304</td> 
          <td class="col-phone">18005151538</td> 
          <td class="col-phone-bk"></td> 
          <td class="col-action"> <span>默认地址</span> | <a href="/profile/address/edit_id/1939846">编辑</a> | <a class="gray_link" href="/profile/deleteAddress/id/1939846">删除</a> </td> 
         </tr> 
         <tr> 
          <td class="col-address">qq</td> 
          <td class="col-phone">18252022143</td> 
          <td class="col-phone-bk"></td> 
          <td class="col-action"> <a href="/profile/setDefaultAddress/id/2088597">设为默认</a> | <a href="/profile/address/edit_id/2088597">编辑</a> | <a class="gray_link" href="/profile/deleteAddress/id/2088597">删除</a> </td> 
         </tr> 
        </tbody> 
       </table> 
       <h3>新增/编辑送餐地址</h3> 
       <form id="add_address_form" class="ui-form-horizontal" name="address" method="post" action="/profile/address"> 
        <input type="hidden" name="address[id]" id="address_id" />
        <input type="hidden" name="address[_csrf_token]" value="769532b677c313420e1acb228079d074" id="address__csrf_token" /> 
        <input type="hidden" name="address[entry_id]" id="address_entry_id" /> 
        <label for="address_address"><span class="required-mark">*</span>详细地址</label> 
        <input type="text" name="address[address]" id="address_address" /> 
        <p>（请填写真实详细的送餐地址）</p> 
        <label for="address_phone"><span class="required-mark">*</span>手机号码</label> 
        <input type="text" name="address[phone]" id="address_phone" /> 
        <p>（请保证外卖员能打通该号码）</p> 
        <label for="address_phone_bk">备用电话</label> 
        <input type="text" name="address[phone_bk]" id="address_phone_bk" /> 
        <p>（备用电话方便外卖员能联系到您）</p> 
        <div class="ui-form-footer"> 
         <button id="add_address_submit" class="btn btn-yellow">保存</button> 
        </div> 
       </form> 
      </div> 
     </div> 
    </div> 
   </div> 
   <div id="site_fixed" class="site-fixed"> 
    <a id="back_top" class="btn-back-top ui_invisible" role="button" title="回顶部"><i class="icon-backtop"></i></a> 
    <div class="btn-app-qrcode"> 
     <i class="icon-qrcode"></i> 
     <img class="img-qrcode" src="home/images/app-qrcode.png" alt="扫描二维码免费下载手机App" /> 
    </div> 
   </div> 
@endsection