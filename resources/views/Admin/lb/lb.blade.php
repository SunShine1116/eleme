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
                            轮播列表
                        </div>
                       
                            <div class="">
                           
                            </div>
                       
                            <div class="">
                           
                            </div>
                        
                        <form name="myform" action="" style='display:none' method='post'>
                          
                        </form>
                        <!-- /.panel-heading -->
                        <form action="{{ url('admin/lb') }}">
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    
                                        <tr>
                                            <th>图片ID</th>
                                            <th>图片名</th>
                                            <th>图片</th>
                                            <th>操作</th>
                                        </tr>
                                 
                                        <tr class="odd gradeX">
                                            <td></td>
                                            <td></td>
                                            <td><img src="" width='100' height='100'></td>
                                            <td>
												<a href=''>删除</a>
												<a href=''>修改</a>
                                            </td>
                                        </tr>
                                    
                                </table>
                            </div>
                        </div>
                        </form>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
              
            </div>
          
    @endsection