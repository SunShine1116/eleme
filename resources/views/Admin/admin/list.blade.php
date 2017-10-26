@extends('admin.layout.layout')
    @section('content')
          <div class="row">
                <div class="col-lg-12">
                    <br>
                </div>
                
                
            </div>
         
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            管理员列表
                        </div>
                       
                            <div class="alert alert-success">
                                
                            </div>
                       
                       
                            <div class="alert alert-danger">
                               
                            </div>
                     
                       
                    
                        <form name="myform" action="" style='display:none' method='post'>
                     
                        </form>
                        
                        <div class="panel-body">

                            <div class="dataTable_wrapper">
                            <form action="/admin/admin">
                                <div class="form-group input-group " >
                                    <span class="input-group-addon">账户名</span>
                                    <input class="form-control" type="text" name='uname'>
                                    <span class="input-group-addon"><input type="submit" value="搜索"></span>
                                </div>
                            </form>
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>管理ID</th>
                                            <th>账户名</th>
                                            <th>密码</th>
                                            <th>操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                            <tr class="odd gradeX">
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <a class="btn m-r-5" href=''>删除</a>
                                                    <a class="btn m-r-5" href=''>修改</a>
                                                </td>
                                            </tr>
                                        
                                     
                                    </tbody>
                                </table>
                             
                            </div>
                            
                        </div>
                        <!-- </form> -->
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
           
    @endsection