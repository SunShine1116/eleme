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
               添加商家
            </div>
            
                        <div class="alert alert-danger">
                            <ul>
                              
                                    <li></li>
                              
                            </ul>
                        </div>
                  
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form action="{{ url('admin/seller') }}" method='post' enctype="multipart/form-data">
                    
                        <div class="form-group input-group">
                                <span class="input-group-addon">商家详情ID</span>
                                <input type="text" class="form-control" name="sdid">
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon">商家ID</span>
                                <input type="text" class="form-control" name="sid">
                            </div>
                             <div class="form-group input-group">
                                <span class="input-group-addon">商铺名</span>
                                <input type="text" class="form-control" name="sname">
                            </div>
                             <div class="form-group input-group">
                                <span class="input-group-addon">密码</span>
                                <input type="password" class="form-control" name="spwd">
                            </div>
                             <div class="form-group input-group">
                                <span class="input-group-addon">联系人</span>
                                <input type="text" class="form-control" name="contacts">
                            </div>
                             <div class="form-group input-group">
                                <span class="input-group-addon">外卖电话</span>
                                <input type="text" class="form-control" name="extel">
                            </div>
                             <div class="form-group input-group">
                                <span class="input-group-addon">商家类别</span>
                                <input type="text" class="form-control" name="csid">
                            </div>
                             <div class="form-group input-group">
                                <span class="input-group-addon">门店地址</span>
                                <input type="text" class="form-control" name="exaddr">
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon">门店区域</span>
                                <input type="text" class="form-control" name="exarea">
                            </div>
                             <div class="form-group input-group">
                                <span class="input-group-addon">门店图片</span>
                                <input type="file" class="form-control" name="eximage">
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon">特色菜品</span>
                                <input type="text" class="form-control" name="tese">
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon">停车位</span>
                                <input type="text" class="form-control" name="park">
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon">营业时间</span>
                                <input type="text" class="form-control" name="time">
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon">wifi</span>
                                <input type="text" class="form-control" name="wifi">
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon">乘车路线</span>
                                <input type="text" class="form-control" name="luxian">
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon">店铺介绍</span>
                                <input type="text" class="form-control" name="jieshao">
                            </div>
                            
                            <input type="submit" name="" value="提交">
                             <input type="reset" name="" value="重置">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    @endsection