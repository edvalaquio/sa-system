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

// Main Routes
Route::get('/', "MainController@index");
Route::get('home', "HomeController@index");
Route::get('sent', "SendController@index");
Route::get('received', "ReceiveController@index");
Route::get('accounts', "AccountController@index");
Route::get('transaction', "TransactionController@index");
Route::get('test', "MainController@testFunction");
Route::post('testPut', "AdminController@addStaff");


// first run add user
Route::get('/addAdmin', "MainController@addFirstUser");
// admin routes
Route::get('admin', "AdminController@index")->middleware('auth');
Route::get('admin/addStaff', "AdminController@addStaff")->middleware('auth');

// staff routes


// utility routes
Route::get('logout', "MainController@logout");
Auth::routes();
