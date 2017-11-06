<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|   
*/


//前台路由
	//Route::get('/', 'home\IndexController@index');
	// Route::get('/404', function () {return view('home.404');});
	
Route::group(['prefix' => 'home'],function(){
	//首页
	Route::get('/index', 'home\IndexController@index');
	Route::get('/404', function () {return view('home.404');});
	
	//注册协议
	Route::get('/agreement', function () {return view('home.agreement');});
	//地图
	Route::get('/city','home\IndexController@city');
	
	Route::get('/sitemap_detail', function () {return view('home.sitemap_detail');});
	Route::get('/sitemaps', function () {return view('home.sitemaps');});
	//关于我们
	//Route::get('/contact', function () {return view('home.contact');});
	//反馈留言
	Route::get('/feedback', function () {return view('home.feedback');});
	//忘记密码
	Route::get('/forget', function () {return view('home.forget');});
	//礼品中心
	Route::get('/gift', function () {return view('home.gift');});
	//礼品详情
	Route::get('/gift_detail', function () {return view('home.gift_detail');});
	//热门问题
	Route::get('/help', function () {return view('home.help');});
	//友情链接
	Route::get('/links', function () {return view('home.links');});
	//登录
	Route::get('/login', function () {return view('home.login');});
	
	//注册
	Route::get('/register', 'home\RegisterController@register');
	Route::post('/register', 'home\RegisterController@doregister');

	//管理我的地址
	Route::get('/member_addr', function () {return view('home.member.member_addr');});
	//充值详情
	Route::get('/member_charge', function () {return view('home.member.member_charge');});
	//订单信息（支付）
	Route::get('/member_checkout', function () {return view('home.member.member_checkout');});
	//我的收藏
	Route::get('/member_collect_food', function () {return view('home.member.member_collect_food');});
	Route::get('/member_collect_shop', function () {return view('home.member.member_collect_shop');});
	//个人中心
	Route::get('/member_index', function () {return view('home.member.member_index');});
	//个人中心  修改密码
	Route::get('/member_pwd', function () {return view('home.member.member_pwd');});
	//邀请好友
	//Route::get('/member_invite', function () {return view('home.member_invite');});
	//我的订单
	Route::get('/member_order', function () {return view('home.member.member_order');});
	Route::get('/member_order_month', function () {return view('home.member.member_order_month');});
	Route::get('/member_order_refund', function () {return view('home.member.member_order_refund');});
	//评价
	Route::get('/member_comments', function () {return view('home.member.member_comments');});
	//我的红包
	Route::get('/member_red_packet', function () {return view('home.member.member_red_packet');});
	//安全设置
	Route::get('/member_safe_set', function () {return view('home.member.member_safe_set');});
	//收支明细
	Route::get('/member_schedule', function () {return view('home.member.member_schedule');});
	//手机解绑
	Route::get('/member_unbind_phone', function () {return view('home.member.member_unbind_phone');});
	//订单完成
	Route::get('/order_success', function () {return view('home.order_success');});
	//重置密码
	Route::get('/password_reset', function () {return view('home.password_reset');});
	//商界页
	
	
	//美食分类
	Route::get('/shop_detail', function () {return view('home.shop.shop_detail');});
	//美食墙
	Route::get('/shop_photos', function () {return view('home.shop.shop_photos');});
	//评价
	Route::get('/shop_comments', function () {return view('home.shop.shop_comments');});
	//全部留言
	Route::get('/shop_message', function () {return view('home.shop.shop_message');});
	
	//不让留言
	// Route::get('/shop_comment_no', function () {return view('home.shop.shop_comment_no');});
	
	//暂无图片
	// Route::get('/shop_photos_empty', function () {return view('home.shop.shop_photos_empty');});
	//Route::get('/sitemap', function () {return view('home.sitemap');});
	//客服
	Route::get('/support', function () {return view('home.support');});


});





//后台路由群组
Route::group(['prefix' => 'admin'],function(){

	//后台首页
	Route::get('/index','Admin\AdminController@index');
	//后台评价
	Route::get('/eval', 'Admin\EvalController@getIndex');

	//后台分类列表
	Route::get('/classify', 'Admin\ClassifyController@create');
	//后台用户列表
	Route::get('/user', 'Admin\UserController@index');
	//后台用户列表
	Route::get('/user/create', 'Admin\UserController@create');
	

	//后台管理员
	Route::resource('/admin', 'Admin\GuanController');
	
	

	//后台分类列表
	Route::get('/classify', 'Admin\ClassifyController@index');
	//后台分类添加
	Route::get('/classify/create', 'Admin\ClassifyController@create');
	//后台商家详情列表
	Route::get('/seller', 'Admin\SellerController@index');
	//后台商家添加
	Route::get('/seller/create', 'Admin\SellerController@create');
	//后台友情链接
	Route::get('/link', 'Admin\LinkController@getIndex');
	//后台友情链接添加
	Route::get('/link/add', 'Admin\LinkController@getAdd');

	//后台网站配置
	Route::get('/conf', 'Admin\ConfController@getIndex');
	//后台商家入驻
	Route::get('/sjrz', 'Admin\SjrzController@getIndex');

 });

//后台登录
Route::get('admin/login', 'Admin\LoginController@index');
Route::post('admin/login', 'Admin\LoginController@doLogin');
Route::get('admin/logout', 'Admin\LoginController@dologout');









//商家路由群组
Route::group(['prefix' => 'store'], function () {
	//商家平台首页（订单处理页面）
	Route::get('/', function () {
	    return view('store.order.do_order');
	});
	//订单处理页面
	Route::get('/ord', 'store\OrderController@index');
	//订单查询页面
	Route::get('/ords', 'store\OrderController@history');

	//菜品管理页面
	Route::get('/foods', 'store\FoodController@index');
	//菜品编辑页面
	Route::get('/foodEdit', 'store\FoodController@edit');
	//菜品回收站页面
	Route::get('/foodRecycle', 'store\FoodController@recycle');

	//评论管理页面
	Route::get('/contents', 'store\ContentController@index');
	//评论回复页面
	Route::get('/reply', 'store\ContentController@reply');
	//评论举报页面
	Route::get('/complain', 'store\ContentController@complain');

	//账本页面
	Route::get('/account', 'store\AccountController@index');
	


	//设置页面
	Route::get('/set', 'store\SetController@index');

	//通知中心页面
	Route::get('/message', 'store\MessageController@index');
	//通知中心详情页面
	Route::get('/messageInfo', 'store\MessageController@info');

	//问题反馈页面
	Route::get('/question', 'store\QuestionController@index');


});


	//商家登录页面
	Route::get('/store/login', 'store\UserController@login');
	//登录执行
	Route::post('/store/dologin', 'store\UserController@dologin');
	

	//商家注册页面
	Route::get('/store/signUp', 'store\UserController@signUp');
	//判断手机号是否正确
	Route::post('/store/dosignUp', 'store\UserController@dosignUp');
	Route::get('/store/checkcode', 'store\UserController@checkcode');
	//发送手机验证码路由
	Route::get('/store/sendcode','store\UserController@sendcode');


