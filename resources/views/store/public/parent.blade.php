<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>饱否商家版</title>
    <meta name="description" content="这是一个 index 页面">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="assets/i/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="assets/i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <script src="{{ asset('assets/js/echarts.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/amazeui.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/amazeui.datatables.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <!-- <link rel="stylesheet" href="{{asset('css/app.css')}}"> -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>

</head>

<body data-type="index">
    <script src="{{ asset('assets/js/theme.js') }}"></script>
    <div class="am-g tpl-g">
        <!-- 头部 -->
        <header>
            <!-- logo -->
            <div class="am-fl tpl-header-logo">
                <a href="javascript:;"><img src="{{ asset('assets/img/logo_black.jpg') }}" alt="" height="56px" width="150px"></a>
            </div>
            <!-- 右侧内容 -->
            <div class="tpl-header-fluid">
                <!-- 搜索 -->
                <!-- <div class="am-fl tpl-header-search">
                    <form class="tpl-header-search-form" action="javascript:;">
                        <button class="tpl-header-search-btn am-icon-search"></button>
                        <input class="tpl-header-search-box" type="text" placeholder="搜索订单">
                    </form>
                </div> -->
                <!-- 其它功能-->
                <div class="am-fr tpl-header-navbar">
                    <ul>
                        <!-- 欢迎语 -->
                        <li class="am-text-sm tpl-header-navbar-welcome">
                            <a href="javascript:;">欢迎你, <span>商家名</span> </a>
                        </li>

                        <!-- 退出 -->
                        <li class="am-text-sm">
                            <a href="javascript:quit();">
                                <span class="am-icon-sign-out"></span> 退出
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        <!-- 风格切换 -->
        <!-- <div class="tpl-skiner">
            <div class="tpl-skiner-toggle am-icon-cog">
            </div>
            <div class="tpl-skiner-content">
                <div class="tpl-skiner-content-title">
                    选择主题
                </div>
                <div class="tpl-skiner-content-bar">
                    <span class="skiner-color skiner-white" data-color="theme-white"></span>
                    <span class="skiner-color skiner-black" data-color="theme-black"></span>
                </div>
            </div>
        </div> -->
        <!-- 侧边导航栏 -->
        <div class="left-sidebar">
            <!-- 用户信息 -->
            <div class="tpl-sidebar-user-panel">
                <div class="tpl-user-panel-slide-toggleable">
                    <div class="tpl-user-panel-profile-picture">
                        <img src="{{ asset('assets/img/cake.jpg') }}" alt="">
                    </div>
                    <span class="user-panel-logged-in-text">
                        <i class="am-icon-circle-o am-text-success tpl-user-panel-status-icon"></i>
                        已关店
                        <i class="am-icon-check am-text-success tpl-user-panel-status-icon"></i>
                        已开店
                    </span>
                </div>
            </div>

            <!-- 菜单 -->
            <ul class="sidebar-nav">
                <li class="sidebar-nav-link">
                    <a href="{{ url('store/ord') }}">
                        <i class="am-icon-wpforms sidebar-nav-link-logo"></i> 订单处理

                    </a>
                </li>
                <li class="sidebar-nav-link">
                    <a href="{{ url('store/ords') }}">
                        <i class="am-icon-history sidebar-nav-link-logo"></i> 订单查询
                    </a>
                </li>
                <li class="sidebar-nav-link">
                    <a href="javascript:;" class="sidebar-nav-sub-title">
                        <i class="am-icon-tv sidebar-nav-link-logo"></i> 管理
                        <span class="am-icon-chevron-down am-fr am-margin-right-sm sidebar-nav-sub-ico"></span>
                    </a>
                    <ul class="sidebar-nav sidebar-nav-sub">
                        <li class="sidebar-nav-link">
                            <a href="{{ url('store/foods') }}">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 菜品
                            </a>
                        </li>

                        <li class="sidebar-nav-link">
                            <a href="{{ url('store/contents') }}">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 评价
                            </a>
                        </li>

                        <li class="sidebar-nav-link">
                            <a href="{{ url('store/account') }}">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 账本
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-nav-link">
                    <a href="{{ url('store/set') }}">
                        <i class="am-icon-cog sidebar-nav-link-logo"></i> 设置
                    </a>
                </li>
                <li class="sidebar-nav-link">
                    <a href="{{ url('store/message') }}">
                        <i class="am-icon-envelope sidebar-nav-link-logo"></i> 通知中心
                    </a>
                </li>
                <li class="sidebar-nav-link">
                    <a href="{{ url('store/foodRecycle') }}">
                        <i class="am-icon-trash sidebar-nav-link-logo"></i> 菜品回收站
                    </a>
                </li>
                <li class="sidebar-nav-link">
                    <a href="{{ url('store/question') }}">
                        <i class="am-icon-bell sidebar-nav-link-logo"></i> 问题反馈
                    </a>
                </li>
            </ul>
        </div>

        <!-- 内容区域 -->
        <section id="content" class="container">
            @yield('content')
        </section>

    </div>
    <script src="{{ asset('assets/js/amazeui.min.js') }}"></script>
    <script src="{{ asset('assets/js/amazeui.datatables.min.js') }}"></script>
    <script src="{{ asset('assets/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>

</body>
<script>
    function quit()
    {
        if ( confirm('确认退出吗？') ) {
            window.location = '/store/login';
        }
    }
</script>
</html>