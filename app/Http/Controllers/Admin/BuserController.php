<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BuserController extends Controller
{

    public function getIndex()
    {
        return view('admin.buser.buser');
    }


  
    public function getEdit()
    {
       
        return view('admin.buser.edit');
    }

}
