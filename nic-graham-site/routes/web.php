<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/Old-Site', function () {
    return view('Old-Site');
});
Route::get('/blogs', function () {
    return view('placeholder');
});
Route::get('/projects', function () {
    return view('placeholder');
});

Route::get('/in-progress', function () {
    return view('placeholder');
});
Route::get('/contact', function () {
    return view('placeholder');
});

Route::get('/puter', function () {
    return view('placeholder');
});
