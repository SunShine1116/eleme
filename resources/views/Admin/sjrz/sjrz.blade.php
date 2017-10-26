@extends('admin.layout.layout')
@section('title')
<title>叫个外卖官网 - 后台商家入驻表</title>
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
       商家入驻列表 
     </div> 
     <!-- /.panel-heading --> 
     <div class="panel-body"> 
      <div class="dataTable_wrapper"> 
       <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
      <form action="{{url('/admin/sjrz/index')}}" method="get">
        <div class="row">
         <div class="col-sm-6">
          <div class="dataTables_length" id="dataTables-example_length">
           <label>显示 
            <select name="num" aria-controls="dataTables-example" class="form-control input-sm">
             
              <option value="100" selecte>100</option>
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
        <div class="row">
         <div class="col-sm-12">
          <table id="dataTables-example" class="table table-striped table-bordered table-hover dataTable no-footer" role="grid" aria-describedby="dataTables-example_info"> 
           <thead> 
            <tr role="row">
             <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1"  aria-label="Browser: activate to sort column ascending">ID</th>
             <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1"  aria-label="Browser: activate to sort column ascending">店铺名字</th>
             <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1"  aria-label="Browser: activate to sort column ascending">负责人身份证号</th>
             <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">负责人真实姓名</th>
             <!-- <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 200px;" aria-label="Platform(s): activate to sort column ascending">子类</th> -->
             <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 200px;" aria-label="CSS grade: activate to sort column ascending">操作</th>
            </tr> 
           </thead> 
           <tbody> 
         
                <tr class="gradeA odd" role="row"> 
                 <td class="sorting_1"></td>

                  <!-- 显示商品名字 -->
                 <td></td> 
                 <td></td> 
                
                  <!-- 显示商品的价格 -->
                 <td></td> 
                
             <td class="center">
                <button class="btn btn-danger btn-xs btn-delete" type="button"> 删除</button>
                </td> 
            </tr>
            
           </tbody> 
          </table>
         </div>
        </div>
        <div class="row">
         <div class="col-sm-12">
          <div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate">
            
          </div>
         </div>
        </div>
       </div> 
      </div> 
    <!-- 分页开始 -->
    <div class="row">
         <div class="col-sm-12">
          <div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate">
          
          </div>
         </div>
        </div>
    <!-- 分页结束 -->

      <!-- /.table-responsive --> 
      
     </div> 
     <!-- /.panel-body --> 
    </div> 
    <!-- /.panel --> 
   </div> 
   <!-- /.col-lg-12 --> 
  </div>


@endsection
