<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CollectionController extends Controller
{
    
    public function getIndex()
    {
        return view('admin.collection.collection');
    }
}
