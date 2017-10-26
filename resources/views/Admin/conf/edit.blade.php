@extends('admin.layout.layout')
@section('title')
<title>叫个外卖官网 - 后台网站配置修改</title>
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
                网站配置修改
            </div>
            <div class="panel-body">
                <div class="row">
                        
                   
                        <div class="alert alert-danger">
                            <ul>
                             
                                    <li></li>
                          
                            </ul>
                        </div>
                 
                    <div class="col-lg-6 col-lg-offset-3">
                        <form role="form" action="{{url('/admin/conf/update')}}" method="post" enctype="multipart/form-data">
        

                            <div class="form-group">
                                <label>网站图标</label>
                                <input type="file" name="logo" value=''>
                            </div>

                            <div class="form-group">
                                <label>备案信息</label>
                                <input class="form-control" name="record" value=''>
                            </div>

                            <div class="form-group">
                                <label>联系方式</label>
                                <input class="form-control" name="contact" value=''>
                            </div>
                            <div class="form-group">
                                <label>开关</label>
                                <input name="open" id="optionsRadiosInline1" value="1" type="radio" checked>&nbsp开&nbsp
                                <input name="open" id="optionsRadiosInline2" value="0" type="radio">&nbsp关
                             </div> 
                            <input type="hidden" name="conid" value="">
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