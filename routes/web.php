<?php

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

Route::get('home', function () {
    return view('home');
});
Route::get('meo', function () {
    return view('meo');
});
Route::get('biolux', function () {
    return view('biolux');
});
Route::get('oxy', function () {
    return view('oxy');
});
Route::get('experience', function () {
    return view('experience');
});
Route::get('blogs', function () {
    return view('blogs');
});

Route::get('contact', function () {
    return view('contact');
});
