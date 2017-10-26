@extends('admin.layout.layout')
    @section('content')
          
<div class="row">
    <div class="col-lg-12">
        <br>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
               修改商家
            </div>
                <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form action="/admin/seller/{{ $seller->sdid }}" method='post' enctype="multipart/form-data">
                        
                        <div class="form-group input-group">
                                <span class="input-group-addon">商家详情ID</span>
                                <input type="text" class="form-control" name="sdid" value=''>
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon">商家ID</span>
                                <input type="text" class="form-control" name="sid" value=''>
                            </div>
                             <div class="form-group input-group">
                                <span class="input-group-addon">商铺名</span>
                                <input type="text" class="form-control" name="sname" value=''>
                            </div>
                             <div class="form-group input-group">
                                <span class="input-group-addon">联系人</span>
                                <input type="text" class="form-control" name="contacts" value=''>
                            </div>
                             <div class="form-group input-group">
                                <span class="input-group-addon">外卖电话</span>
                                <input type="text" class="form-control" name="extel" value=''>
                            </div>
                             <div class="form-group input-group">
                                <span class="input-group-addon">商家类别</span>
                                <input type="text" class="form-control" name="csid" value=''>
                            </div>
                             <div class="form-group input-group">
                                <span class="input-group-addon">门店地址</span>
                                <input type="text" class="form-control" name="exaddr" value=''>
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon">门店区域</span>
                                <input type="text" class="form-control" name="exarea" value=''>
                            </div>
                             <div class="form-group input-group">
                                <span class="input-group-addon">门店图片</span>
                                <input type="file" class="form-control" name="eximage" value=''>
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon">特色菜品</span>
                                <input type="text" class="form-control" name="tese" value=''>
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon">停车位</span>
                                <input type="text" class="form-control" name="park" value=''>
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon">营业时间</span>
                                <input type="text" class="form-control" name="time" value=''>
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon">wifi</span>
                                <input type="text" class="form-control" name="wifi" value=''>
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon">乘车路线</span>
                                <input type="text" class="form-control" name="luxian" value=''>
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon">店铺介绍</span>
                                <input type="text" class="form-control" name="jieshao" value=''>
                            </div>
                            
                            <input type="submit" name="" value="修改">
                             <input type="reset" name="" value="重置">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    @endsection