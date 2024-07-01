<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SiteSettingController;
use App\Http\Controllers\UserController;
use App\Models\SiteSetting;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
})->name('login');

Route::post('login', [AuthController::class, 'login']);

Route::group(['middleware'=>'auth','prefix'=>'admin'],function(){
    Route::get('logout', [AuthController::class, 'logout']);

    Route::get('dashboard', [DashboardController::class, 'index']);
    Route::get('profile', [UserController::class, 'profile']);


    Route::get('blogs', [BlogController::class, 'index']);
    Route::get('blogs/create', [BlogController::class, 'create']);
    Route::post('blogs/create', [BlogController::class, 'store']);
    Route::get('blogs/delete/{id}', [BlogController::class, 'destroy']);


    Route::get('settings/general-settings', [SettingController::class, 'general_setting']);
    Route::get('settings/social-links-settings', [SettingController::class, 'social_link_setting']);
    Route::post('settings/site-settings', [SiteSettingController::class, 'store']);
});