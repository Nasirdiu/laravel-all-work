<?php

use App\Http\Controllers\AuthenticationController;
use Illuminate\Support\Facades\Route;


Route::post('/UserRegistration',[AuthenticationController::class,'UserRegistration']);
Route::post('/UserLogin',[AuthenticationController::class,'UserLogin']);
