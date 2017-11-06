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
                           
                        <div class="alert alert-danger">
                            <ul>
                              
                                    <li></li>
                              
                            </ul>
                        </div>
                       
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form  action="{{ url('admin/admin/'.$list->aid) }}" method='post'> 
                                        {{ csrf_field() }}
                                        {{ method_field('PUT') }}
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">账户名</span>
                                            <input type="text" class="form-control" name='aname' placeholder="" value='{{ $list->aname }}'>
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">密码</span>
                                            <input type="text" class="form-control" name='apwd' placeholder="" value='{{ $list->apwd }}'>
                                        </div>
                                        <button type="submit" class="btn btn-default">修改</button>
                                        <button type="reset" class="btn btn-default">重置</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    @endsection