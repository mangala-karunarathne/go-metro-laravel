<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login'); // corresponds to login.blade.php
});
Route::get('/calender', function () {
    return view('calender'); 
});
Route::get('/charts-flot', function () {
    return view('charts-flot'); 
});
