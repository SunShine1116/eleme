<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class IndexController extends Controller
{
    public function index(Request $request)
    {

    	//获取登录的Uid 根据UID查询收藏表中的商家信息表获取商家信息
    	// $uid = '';
    	$collection = DB::table('collection')
            ->leftJoin('seller_detail', 'collection.sid', '=', 'seller_detail.sid')
            // ->where('collection.uid', '=' ,$uid)
			->get();
    	return view('home.index',['collection'=>$collection]);
    }

    public function city(Request $request)
    {
    	return view('home.city');
    }	

    public function doCity()
    {
        // $aa = $_GET['cityname']
        return redirect('/home/index');
    }
}
