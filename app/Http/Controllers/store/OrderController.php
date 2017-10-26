<?php

namespace App\Http\Controllers\store;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function index()
    {
    	return view('store.order.do_order');
    }

    public function history()
    {
    	return view('store.order.orders_history');
    }
}
