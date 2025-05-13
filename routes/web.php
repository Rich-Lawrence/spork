<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/entry', function () {
    $testData = [1,2,3,4,5,6,7,8,9];
    return view('entry')
        ->with('testData', $testData);
});


####################################################
#                 Login / Register                 #
####################################################

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
Route::get('registration', [AuthController::class, 'register'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegister'])->name('register.post');
Route::get('dashboard', [AuthController::class, 'dashboard']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
