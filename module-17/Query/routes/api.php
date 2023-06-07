<?php

use App\Http\Controllers\DemoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/delete/{id}',[DemoController::class,'DemoAction']);
