<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function register()
    {
    	return view('home.register'); 
    }
    public function doregister(Request $request)
    {
    	dd($request->input('username'));
    }
    
}
