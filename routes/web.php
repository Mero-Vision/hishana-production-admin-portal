<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
})->name('login');

Route::post('login', [AuthController::class, 'login']);

Route::group(['middleware'=>'auth','prefix'=>'admin'],function(){
    Route::get('logout', [LoginController::class, 'logout']);

    Route::get('dashboard', [DashboardController::class, 'index']);
    Route::get('profile', [UserController::class, 'profile']);


    Route::get('blogs', [BlogController::class, 'index']);
    Route::get('blogs/create', [BlogController::class, 'create']);
    Route::post('blogs/create', [BlogController::class, 'store']);
    Route::get('blogs/delete/{id}', [BlogController::class, 'destroy']);
});