<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class EvalController extends Controller
{
    public function getIndex()
    {
        return view('admin.eval.eval');
    }

}
