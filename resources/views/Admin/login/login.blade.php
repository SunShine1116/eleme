
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>叫个外卖后台管理员登录页面</title>


    <!-- Bootstrap Core CSS -->
    <link href="/public/admin/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="/public/admin/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/public/admin/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/public/admin/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
            
                <div id="errorInfo" class="alert alert-danger alert-dismissable col-sm-6 col-sm-offset-2" style="position:absolute;top:30px;">
                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                    
                </div>
                
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">请登录</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="{{ url('admin/login') }}" method="post">
                      
                        <h2 class="m-t-0 m-b-15">
							
                        </h2>
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="用户名" name="aname" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="密码" name="apwd" type="password" value="">
                                </div>
                                <div class="form-group col-xs-6">
                                    <input class="form-control" placeholder="验证码" name="mycode" type="text">
                                </div>
                                    <img src="">
                                    <br>

                                
                                
                                <button class="btn btn-lg btn-success btn-block">登录</button>
                                <a href="{{url('/admin/register')}}" class="btn btn-lg btn-primary btn-block">注册</a>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="/public/admin/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/public/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="/public/admin/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="/public/admin/dist/js/sb-admin-2.js"></script>

</body>

</html>
