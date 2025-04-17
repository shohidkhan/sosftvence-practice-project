<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index(){
        return view('fronted.home');
    }

    public function forgetPassword(){
        return view('fronted.auth.forget-password');
    }

    
}
