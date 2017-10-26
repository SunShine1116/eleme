<?php

namespace App\Http\Controllers\store;


use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function login()
    {
    	return view('store.user.login');
    }

    public function signUp()
    {
    	return view('store.user.sign_up');
    }

    /**
     * Show a list of all of the application's users.
     *
     * @ return Response
     */
    public function index()
    {
        $users = DB::table('user')->get();

        return view('user', ['users' => $users]);
    }
}
