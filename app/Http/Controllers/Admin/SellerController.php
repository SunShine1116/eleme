<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SellerController extends Controller
{
    //显示商家列表
    public function index()
    {
        return view('Admin.seller.seller');
    }
    //商家添加页面
    public function create()
    {
        return view('Admin.seller.add');
    }
   
    //商家列表编辑
    public function edit()
    {
        return view('Admin.seller.edit');
    }
}
