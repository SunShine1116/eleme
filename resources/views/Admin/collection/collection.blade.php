@extends('admin.layout.layout')
@section('title')
<title>叫个外卖官网 - 后台收藏列表</title>
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
       收藏列表
     </div> 
     <!-- /.panel-heading --> 
     <div class="panel-body"> 
      <div class="dataTable_wrapper"> 
       <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
      <form action="{{url('/admin/collection/index')}}" method="get">
        <div class="row">
         <div class="col-sm-6">
          <div class="dataTables_length" id="dataTables-example_length">
           <label>显示 
            <select name="num" aria-controls="dataTables-example" class="form-control input-sm">
             
              <option value="100"  selected >100</option>
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
             <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1"  aria-label="Browser: activate to sort column ascending">收藏ID</th>
             <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1"  aria-label="Browser: activate to sort column ascending">商家ID</th>
             <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">用户ID</th>
            </tr> 
           </thead> 
           <tbody> 
             
                <tr class="gradeA odd" role="row"> 
                 <td class="sorting_1"></td>

                  <!-- 显示商品名字 -->
                 <td></td> 
                
                  <!-- 显示商品的价格 -->
                 <td></td> 
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
@section('js')

@endsection
