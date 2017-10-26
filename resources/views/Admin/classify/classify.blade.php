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
       商品列表 
     </div> 
     <!-- /.panel-heading --> 
     <div class="panel-body"> 
      <div class="dataTable_wrapper"> 
       <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
      <form action="{{url('/admin/classify')}}" method="get">
        <div class="row">
         <div class="col-sm-6">
          <div class="dataTables_length" id="dataTables-example_length">
           <label>显示 
            <select name="num" aria-controls="dataTables-example" class="form-control input-sm">
             
              <option value="100"  selected>100</option>
            </select> 条</label>
          </div>
         </div>
         <div class="col-sm-6">
          <div id="dataTables-example_filter" class="dataTables_filter">
           <label>查询:<input type="search" name="keywords" value="" class="form-control input-sm" placeholder="" aria-controls="dataTables-example" /></label>
            <button class="btn">搜索</button>
          </div>
         </div>
        </div>
      </form>

                      
                            <div class="">
                          
                            </div>
                           
                          
                            <div class="">
                         
                            </div>
                           
                        <form name="myform" action="" style='display:none' method='post'>
                          
                        </form>
                        <!-- /.panel-heading -->
                        <form action="{{ url('admin/classify') }}">
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    
                                        <tr>
                                            <th>商家分类ID</th>
                                            <th>分类名</th>
                                            <th>操作</th>
                                        </tr>
                                  
                                        <tr class="odd gradeX">
                                            <td></td>
                                            <td></td>
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