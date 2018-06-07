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

// Temporary routes
Route::get('home', "MainController@home");
Route::get('sent', "MainController@sent");
Route::get('received', "MainController@received");
Route::get('accounts', "MainController@accounts");
Route::get('transaction', "MainController@transaction");

Route::get('/', "MainController@index");
Route::get('main', "MainController@filelog");
// admin routes
Route::get('admin', "AdminController@index")->middleware('auth');
Route::get('admin/addStaff', "AdminController@addStaff")->middleware('auth');

// staff routes

// utility routes
Route::get('logout', "MainController@logout");
Auth::routes();
