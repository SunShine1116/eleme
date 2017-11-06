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
                            添加管理员
                       
                        <div class="alert alert-danger">
                            <ul>
                            
                                    <li></li>
                               
                            </ul>
                        </div>
                     
                         
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    @if (session('msg'))
                                   
                                        <script>
                                            alert("{{ session('msg') }}");
                                        </script>
                                    @endif
                                    <form  action="/admin/admin" method="post" enctype='multipart/form-data'> 
                                         {{ csrf_field() }}
                                         {{--<input type="hidden" name="_token" value="{{csrf_token()}}">--}}
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">账户名</span>
                                            <input type="text" class="form-control" name='aname' placeholder="请输入您的账号">
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">密码</span>
                                            <input type="password" class="form-control" name='apwd' placeholder="请输入您的密码">
                                        </div>
                                        <button type="submit" class="btn btn-default">提交</button>
                                        
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