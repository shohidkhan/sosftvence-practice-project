<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\Backend\Client\DashboardController;


Route::get("/dashboard",[DashboardController::class,'index'])->name('dashboard');