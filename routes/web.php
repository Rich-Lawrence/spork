<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return redirect()->route('dashboard');
    return view('welcome');
});

Route::get('/entry', function () {
    $testData = [1,2,3,4,5,6,7,8,9];
    $test = [];
    $boo = [];
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
Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');;
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

####################################################
#                    Auth Routes                   #
####################################################

Route::middleware(['auth'])->group(function () {

    Route::get('locked', function () {
        dd('123');
    });

    Route::get('locked2', function () {
        dd('hello2');
    });

    Route::get('soundcloud', function () {
        return view('soundcloud');
    });

});
