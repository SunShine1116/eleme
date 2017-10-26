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
               修改轮播
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form action="" method='post' enctype="multipart/form-data">
                       
                             <div class="form-group input-group">
                                <span class="input-group-addon">图片ID</span>
                                <input type="text" class="form-control" name="lbid" value=''>
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon">图片名</span>
                                <input type="text" class="form-control" name="lbname" value=''>
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon">图片</span>
                                <img src="" width="100px"; height="100px">
                                <input type="file" class="form-control" name="lbimage" value=''>
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