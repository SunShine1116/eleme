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
      <form action="{{url('/admin/seller')}}" method="get">
        <div class="row">
         <div class="col-sm-6">
          <div class="dataTables_length" id="dataTables-example_length">
           <label>显示 
            <select name="num" aria-controls="dataTables-example" class="form-control input-sm">
              <option value="10"  selected >10</option>
              
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

                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                
                                        <tr>
                                            <th>商家详情ID</th>
                                            <th>商家ID</th>
                                            <th>商铺名</th>
                                            <th>密码</th>
                                            <th>联系人</th>
                                            <th>外卖电话</th>
                                            <th>商家类别</th>
                                            <th>门店地址</th>
                                            <th>门店区域</th>
                                            <th>门店图片</th>
                                            <th>特色菜品</th>
                                            <th>停车位</th>
                                            <th>营业时间</th>
                                            <th>wifi</th>
                                            <th>乘车路线</th>
                                            <th>店铺介绍</th>
                                            <th>操作</th>
                                        </tr>
                             
                                        <tr class="odd gradeX">
                                           
                                        </tr>
                                  
                                </table>
                            </div>
                        </div>
                        </form>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
              <!-- 分页开始 -->
    <div class="row">
         <div class="col-sm-12">
          <div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate">
       
          </div>
         </div>
        </div>
    <!-- 分页结束 -->
            </div>
            
    @endsection