<?php

namespace App\Http\Controllers\Web\Backend\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    public function index(){
        return 'admin';
        return view('backend.admin.dashboard');
    }
}
