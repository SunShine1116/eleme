<?php

namespace App\Http\Controllers\store;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SetController extends Controller
{
    public function index()
    {
    	return view('store.set.set');
    }

    public function history()
    {
    	return view('store.orders_history');
    }
}
