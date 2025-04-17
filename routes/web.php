<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Web\Frontend\HomeController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class,'index']);
Route::get('/register',[HomeController::class,'register'])->name('register');
Route::get('/login',[HomeController::class,'login'])->name('login');
Route::get('/forget-password',[HomeController::class,'forgetPassword'])->name('password.forget');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';
