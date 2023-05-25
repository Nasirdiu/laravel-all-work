<?php

use App\Http\Controllers\DemoController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;

Route::get('/hello',[DemoController::class,'DemoAction']);
Route::get('/single',VideoController::class);

Route::resource('photos',PhotoController::class);
