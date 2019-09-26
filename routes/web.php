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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/search','HomeController@search');
Route::get('/pagination/fetch_data', 'HomeController@fetch_data');
Route::get('/customer', 'HomeController@customer')->middleware('customer');
Route::get('/agent', 'HomeController@agent')->middleware('agent');
Route::get('/admin', 'HomeController@admin')->middleware('admin');
/*Route::get('/search/data', 'HomeController@fetch_data');*/

Route::get('/','FileController@file');
Route::post('/store','FileController@store')->name('file.store');


