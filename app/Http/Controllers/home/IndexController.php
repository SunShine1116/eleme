<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class IndexController extends Controller
{
    public function index()
    {
       
        if(empty($_GET['cityname'])){
             $cityname = '北京';
        }else{
            $cityname = $_GET['cityname'];
        }
        return view('home.index',['cityname'=>$cityname]);
    }

    public function city(Request $request)
    {
    	return view('home.city');
    }	

    
}
