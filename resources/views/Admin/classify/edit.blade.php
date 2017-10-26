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
               修改分类
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form action="" method='post'>
                      
                            <div class="form-group input-group">
                                <span class="input-group-addon">分类名</span>
                                <input type="text" class="form-control" name="csname" value=''>
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