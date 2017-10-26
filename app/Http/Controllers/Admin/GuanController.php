<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GuanController extends Controller
{
    public function index()
    {
        // 显示页面
        return view('Admin.admin.list');
       
    }

    public function create()
    {
        //返回添加页面
        return view('Admin.admin.add');
    }

    public function edit()
    {
        // 显示编辑页面
       
        return view('Admin.admin.edit');
    }

   
}
