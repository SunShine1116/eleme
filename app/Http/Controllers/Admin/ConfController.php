<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ConfController extends Controller
{
    public function getIndex()
    {
        return view('admin.conf.conf');
    }

    public function getEdit()
    {
        return view('admin.conf.edit');
    }

   
}
