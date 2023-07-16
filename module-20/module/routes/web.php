<?php

use App\Http\Middleware\TokenVerificationMiddleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::post('/user-registration',[UserController::class,'UserRegistration']);
Route::post('/user-login',[UserController::class,'UserLogin']);
Route::post('/SendOTPCode',[UserController::class,'SendOTPCode']);
Route::post('/VerifyOTP',[UserController::class,'VerifyOTP']);

//token verify
Route::post('/ResetPassword',[UserController::class,'ResetPassword'])
->middleware([TokenVerificationMiddleware::class]);

