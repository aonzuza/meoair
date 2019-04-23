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

Route::get('/test', function () {
    return view('test');
});

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
Route::get('biolux-research', function () {
    return view('biolux-research');
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


// ========================= admin area ======================================


//====================== sales page =========================================
Route::get('/admin/sales', 'SalesController@index');
Route::post('api/admin/sales/create', 'SalesController@create');
// Route::post('/admin/sales/store', 'SalesController@store');
Route::post('api/admin/sales/store', 'SalesController@store');

// Route::get('/admin/sales/show/{salespageID}', 'SalesController@show');
Route::get('/sales/show/{salespageID}', 'SalesController@show');


Route::get('/admin/sales/{salespageID}/edit', 'SalesController@edit');
// delete a sale page
Route::get('/admin/sales/{salespageID}/delete', 'SalesController@destroy');
