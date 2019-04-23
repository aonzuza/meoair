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
    return view('home');
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
Route::group(['middleware' => 'auth'], function() {
    Route::get('/admin/sales', 'SalesController@index');
    Route::post('api/admin/sales/create', 'SalesController@create');

    Route::post('api/admin/sales/store', 'SalesController@store');
    Route::post('api/admin/sales/store/temp', 'SalesController@storeTemp');



    Route::get('/admin/sales/{salespageID}/edit', 'SalesController@edit');
    // delete a sale page
    Route::get('/admin/sales/{salespageID}/delete', 'SalesController@destroy');
});
Route::get('/sales/show/{salespageID}', 'SalesController@show');
Route::get('/sales/show/temp/{salespageID}', 'SalesController@showTemp');



// Auth::routes();

// auth route
// Auth::routes()

// Authentication Routes...
Route::get('admin/login', [
  'as' => 'login',
  'uses' => 'Auth\LoginController@showLoginForm'
]);
Route::post('admin/login', [
  'as' => '',
  'uses' => 'Auth\LoginController@login'
]);
Route::post('logout', [
  'as' => 'logout',
  'uses' => 'Auth\LoginController@logout'
]);

// Password Reset Routes...
Route::post('password/email', [
  'as' => 'password.email',
  'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail'
]);
Route::get('password/reset', [
  'as' => 'password.request',
  'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm'
]);
Route::post('password/reset', [
  'as' => '',
  'uses' => 'Auth\ResetPasswordController@reset'
]);
Route::get('password/reset/{token}', [
  'as' => 'password.reset',
  'uses' => 'Auth\ResetPasswordController@showResetForm'
]);

// Registration Routes...
Route::get('admin/register', [
  'as' => 'register',
  'uses' => 'Auth\RegisterController@showRegistrationForm'
]);
Route::post('admin/register', [
  'as' => '',
  'uses' => 'Auth\RegisterController@register'
]);
