<?php

namespace App\Http\Controllers\store;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AccountController extends Controller
{
    public function index()
    {
    	return view('store.account.account');
    }

    public function history()
    {
    	return view('store.orders_history');
    }
}
