<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::post('/user-registration',[UserController::class,'UserRegistration']);
