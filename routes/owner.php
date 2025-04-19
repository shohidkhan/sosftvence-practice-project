<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\Backend\Owner\DashboardController;
use App\Http\Controllers\Web\Backend\Owner\OwnerProfileController;
use App\Http\Controllers\Web\Backend\Owner\SignageController;

Route::get("/dashboard",[DashboardController::class,'index'])->name('dashboard');
Route::get('/profile',[OwnerProfileController::class,'index'])->name('profile');
Route::post('/profile-store',[OwnerProfileController::class,'store'])->name('profile-store');
Route::get('/add-singage',[SignageController::class,'add_singage'])->name('add_signage');
Route::post('/store-singage',[SignageController::class,'store_singage'])->name('store_signage');