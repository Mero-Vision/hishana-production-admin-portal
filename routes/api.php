<?php

use App\Http\Controllers\Api\SiteSettingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::get("site-settings", [SiteSettingController::class,'index']);