<?php

namespace App\Http\Controllers\store;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class AccountController extends Controller
{
    public function index(Request $request)
    {
    		  
        
        $where = [];
        $ob = DB::table('account');
        
        if($request->has('transaction_hour')){
            
            $time = $request->input('transaction_hour');
            
            $where['transaction_hour'] = $time;
            
            $ob->where('transaction_hour', 'like', '%'.$time.'%');
        }
       
        
        $list = $ob->paginate(3);
        return view('store.account.account', ['accounts'=>$list, 'where'=>$where]);
        
	}


    public function history()
    {
    	return view('store.orders_history');
    }
}
