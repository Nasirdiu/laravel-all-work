<?php

use App\Http\Controllers\DemoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/create-brand/{id}', [DemoController::class, 'DemoAction']);


