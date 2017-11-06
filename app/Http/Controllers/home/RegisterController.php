<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class RegisterController extends Controller
{
    public function register()
    {
    	return view('home.register'); 
    }
    public function doregister(Request $request)
    {
    	

    	$users = DB::table('user')->where('uname',$request->username)->first();

    	$data = $request->except(['_token','repeat']);
    	$uname = $data['username'];
    	$upwd = $data['password'];
    	$uemail = $data['email'];
    	$utime = date('Y-m-d H:i:s',time());
    	if($users == null){
  
    		DB::insert('insert into user (uname, upwd,utel,uemail) values (?, ?,?,?)', [$uname, $upwd,13581869121,$uemail,$utime]);
    		
			return view('home.index');
    	}else{
    		return view('home.register');
    	}
    }
    
}
