<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        
        //解析模板 分配数据
        return view('admin.links.links');
    }

   
    public function getAdd()
    {
        //显示商品添加页面
        return view('admin.links.add');
    }

}
