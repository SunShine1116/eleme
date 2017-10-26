<?php

namespace App\Http\Controllers\store;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FoodController extends Controller
{
    public function index()
    {
    	return view('store.foods.foods');
    }

    public function edit()
    {
    	return view('store.foods.edit');
    }

    public function recycle()
    {
    	return view('store.foods.recycle');
    }
}
