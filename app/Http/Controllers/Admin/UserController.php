<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class UserController extends Controller
{
    
    public function index()
    {
        return view('Admin.user.list');
       
    }
    
    public function create()
    {
        return view('Admin.user.add');
    }

   
    
   
    public function edit()
    {
        return view('Admin.user.edit');
    }

}
