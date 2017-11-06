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
                        @if (session('msg'))
                            <script>
                                alert("{{ session('msg') }}");
                            </script>
                        @endif
                        <form name='myform' action="" method='post' style='display:none'>
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                        </form>
                         <script>
                            function doDel(id)
                            {
                                if(confirm('你确定要删除吗？')){
                                    var form = document.myform;
                                    form.action = 'admin/'+id;
                                    form.submit();
                                }
                                
                            }
                        </script>   
                       
                    
                        
                        
                        <div class="panel-body">

                            <div class="dataTable_wrapper">
                            <form action="{{ url('admin/admin') }}">
                                <div class="form-group input-group " >
                                    <span class="input-group-addon">账户名</span>
                                    <input class="form-control" type="text" name='aname'>
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
                                     @foreach ($lists as $list)
                                    <tbody>
                                    
                                            <tr class="odd gradeX">
                                                <td>{{ $list->aid }}</td>
                                                <td>{{ $list->aname }}</td>
                                                <td>{{ $list->apwd }}</td>
                                                <td>
                                                    <a class="btn m-r-5" href="javascript:doDel({{ $list->aid }})">删除</a>
                                                    <a class="btn m-r-5" href="{{ url('admin/admin/'.$list->aid.'/edit') }}">修改</a>
                                                </td>
                                            </tr>
                                    </tbody>
                                     @endforeach
                                </table>
                            </div>
                            <div class="am-u-lg-12 am-cf">
                                <div class="am-fr">
                                    <ul class="am-pagination tpl-" >
                                       {{ $lists->appends(['$where'])->links() }}
                                    </ul>
                                </div>
                            </div>
                        
                        </div>
                       
                    </div>
                   
                </div>
              
            </div>
            
           
    @endsection