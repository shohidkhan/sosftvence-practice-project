<?php

namespace App\Http\Controllers\Web\Backend\Owner;

use App\Models\Singage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    //


    public function index(){
        $signages=Singage::all();
        return view('backend.owner.dashboard',compact('signages'));
    }
}
