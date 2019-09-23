<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;

class DashboardController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard(){

    	$users = User::all();


    	if( $this->authorize('admin')){

            return view('admin.dashboard', compact('users'));

        }

    }
}
