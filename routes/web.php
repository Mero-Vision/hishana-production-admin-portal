<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
})->name('login');

Route::post('login', [AuthController::class, 'login']);

Route::group(['middleware'=>'auth','prefix'=>'admin'],function(){
    Route::get('logout', [LoginController::class, 'logout']);

    Route::get('dashboard', [DashboardController::class, 'index']);
});