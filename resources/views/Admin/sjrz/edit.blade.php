@extends('admin.layout.layout')
@section('title')
<title>叫个外卖官网 - 商家信息修改</title>
@endsection
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
               商家信息修改
            </div>
            <div class="panel-body">
                <div class="row">
                        
                  
                        <div class="alert alert-danger">
                            <ul>
                             
                                    <li></li>
                              
                            </ul>
                        </div>
                    
                    <div class="col-lg-6 col-lg-offset-3">
                        <form role="form" action="{{url('/badmin/goods/update')}}" method="post" enctype="multipart/form-data">
                          

                            <div class="form-group">
                                <label>商品名字</label>
                                <input class="form-control" name="gname" value=''>
                            </div>

                            <div class="form-group">
                                <label>价格</label>
                                <input class="form-control" name="gprice" value=''>
                            </div>

                            <div class="form-group">
                                <label>库存</label>
                                <input class="form-control" name="gprice" value=''>
                            </div>

                            <div class="form-group">
                                <label>销量</label>
                                <input class="form-control" name="gcount" value=''>
                            </div>

                            <div class="form-group">
                                <label>赠送积分</label>
                                <input class="form-control" name="integral" value=''>
                            </div>

                            <div class="form-group">
                                <label>店名</label>
                                <input class="form-control" name="shopname" value=''>
                            </div>

                            <div class="form-group">
                                <label>地址</label>
                                <input class="form-control" name="gaddress" value=''>
                            </div>

                            <label>商品描述</label>
                            <textarea name="detailsp" cols="75" rows="7" value=''>
                            </textarea>

                            <div class="form-group">
                                <label>商品图片</label>
                                <input type="file" name="gpic" value=''>
                            </div>
                            
                            
                            <input type="hidden" name="gid" value="">
                            <button class="btn btn-primary" type="submit">修改</button>
                            <button class="btn btn-danger" type="reset">重置</button>
                        </form>
                    </div>
                  
                </div>
                <!-- /.row (nested) -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>

@endsection