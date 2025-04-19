<?php

use App\Http\Controllers\Web\Backend\Client\ClientProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\Backend\Client\DashboardController;


Route::get("/dashboard",[DashboardController::class,'index'])->name('dashboard');
Route::get('/profile',[ClientProfileController::class,'index'])->name('profile');
Route::post('/profile-store',[ClientProfileController::class,'store'])->name('profile-store');