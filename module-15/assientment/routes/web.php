<?php

use Illuminate\Support\Facades\Route;

//task8
Route::get('/', function () {
    return view('welcome');
});

//task2
Route::get('/home', function () {
    return redirect('/dashboard', 302);
});


