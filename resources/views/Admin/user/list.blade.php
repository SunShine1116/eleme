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
                            用户列表
                        </div>
                      
                            <div class="alert alert-success">
                              
                            </div>
                      
                            <div class="alert alert-danger">
                              
                            </div>
                  
                  
                        <form name="myform" action="" style='display:none' method='post'>
                       
                        </form>
                        
                        <div class="panel-body">

                            <div class="dataTable_wrapper">
                            <form action="/admin/user">
                                <div class="form-group input-group " >
                                    <span class="input-group-addon">姓名</span>
                                    <input class="form-control" type="text" name='uname'>
                                    <span class="input-group-addon"><input type="submit" value="搜索"></span>
                                </div>
                            </form>
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>用户名</th>
                                            <th>密码</th>
                                            <th>手机号</th>
                                            <th>余额</th>
                                            <th>头像</th>
                                            <th>邮箱</th>
                                            <th>上次登录时间</th>
                                            <th>操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                            <tr class="odd gradeX">
                                                <td></td>
                                               
                                            </tr>
                                     
                                    </tbody>
                                </table>
                              
                            </div>
                            
                        </div>
                   
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
         
    @endsection