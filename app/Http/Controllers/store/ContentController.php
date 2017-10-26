<?php

namespace App\Http\Controllers\store;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContentController extends Controller
{
    public function index()
    {
    	return view('store.contents.contents');
    }

    public function reply()
    {
    	return view('store.contents.reply');
    }

    public function complain()
    {
    	return view('store.contents.complain');
    }
}
