<?php

namespace App\Http\Controllers\store;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{
    public function index()
    {
    	return view('store.message.message');
    }

    public function info()
    {
    	return view('store.message.message_info');
    }
}
