<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClassifyController extends Controller
{
    public function index()
    {
        return view('Admin.classify.classify');
    }
    
    public function create()
    {
        return view('Admin.classify.add');
    }

    public function edit()
    {
        
        return view('Admin.classify.edit');
    }
}
