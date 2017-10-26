<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    
    public function index()
    {
        //返回登录页面
        return view('Admin.login.login');
        
    }
    
}
