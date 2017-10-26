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
                            添加用户
                     
                        <div class="alert alert-danger">
                            <ul>
                                    <li></li>
                            </ul>
                        </div>
                         
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="{{ url('admin/user') }}" method="post" enctype='multipart/form-data'> 
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">姓名</span>
                                            <input type="text" class="form-control" name='uname' placeholder="">
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">密码</span>
                                            <input type="password" class="form-control" name='upwd' placeholder="">
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">手机号</span>
                                            <input type="type" class="form-control" name='utel' placeholder="">
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">余额</span>
                                            <input type="text" class="form-control" name='umoney' placeholder="">
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">头像</span>
                                            <input type="file" class="form-control" name='uface' placeholder="">
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">邮箱</span>
                                            <input type="email" class="form-control" name='uemail' placeholder="">
                                        </div>
                                        <button type="submit" class="btn btn-default">提交</button>
                                        <button type="reset" class="btn btn-default">重置</button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
    @endsection