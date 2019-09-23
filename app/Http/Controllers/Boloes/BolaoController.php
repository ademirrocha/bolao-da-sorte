<?php

namespace App\Http\Controllers\Boloes;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BolaoController extends Controller
{
    public function index(){
    	return view('index');
    }
}
