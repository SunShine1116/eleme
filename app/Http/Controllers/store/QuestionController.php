<?php

namespace App\Http\Controllers\store;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QuestionController extends Controller
{
    public function index()
    {
    	return view('store.question.question');
    }

    public function history()
    {
    	return view('store.orders_history');
    }
}
