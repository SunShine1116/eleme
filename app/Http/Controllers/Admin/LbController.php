<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class LbController extends Controller
{
    //显示轮播页面列表
    public function index()
    {
        return view('Admin.lb.lb');
    }
    //显示轮播添加页面
    public function create()
    {
        return view('Admin.lb.add');
    }

  
   //轮播列表编辑页面
    public function edit()
    {
         
        return view('Admin.lb.edit');
    }

}
