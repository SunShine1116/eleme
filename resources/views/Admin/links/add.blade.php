@extends('admin.layout.layout')
@section('title')
<title>叫个外卖官网 - 后台友情链接添加</title>
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
                友情链接添加
            </div>
            <div class="panel-body">
                <div class="row">
                        
                 
                        <div class="alert alert-danger">
                            <ul>
                               
                                    <li></li>
                               
                            </ul>
                        </div>
                  
                    <div class="col-lg-6 col-lg-offset-3">
                        <form role="form" action="{{url('/admin/link/insert')}}" method="post" enctype="multipart/form-data">
                          
                            <div class="form-group">
                                <label>链接名字</label>
                                <input class="form-control" name="lname">
                            </div>

                            <div class="form-group">
                                <label>链接地址</label>
                                <input class="form-control" name="lurl">
                            </div>
                            <button class="btn btn-primary" type="submit">添加</button>
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