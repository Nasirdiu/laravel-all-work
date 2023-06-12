<?php

use App\Http\Controllers\DemoController;
use Illuminate\Support\Facades\Route;


Route::get( '/getExcerptDescription', [DemoController::class, 'getExcerptDescription'] );
Route::get( '/firstRecordDescription', [DemoController::class, 'firstRecordDescription'] );
Route::get( '/getDescription', [DemoController::class, 'getDescription'] );
Route::get( '/getAllTitle', [DemoController::class, 'getAllTitle'] );
Route::post( '/insertPost', [DemoController::class, 'insertPost'] );
Route::patch( '/update', [DemoController::class, 'update'] );
Route::delete( '/delete', [DemoController::class, 'delete'] );
Route::get( '/getPostByMinRead', [DemoController::class, 'getPostByMinRead'] );
Route::post( '/increments', [DemoController::class, 'increments'] );
