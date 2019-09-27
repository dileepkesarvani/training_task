<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::middleware('auth:api')->get('/user', function (Request $request) {
	return $request->user();

});
	Route::post('/products', 'API\ProductController@store');
	Route::get('show', 'API\ProductController@index');
	Route::get('products/{id}', 'API\ProductController@show');
	Route::put('products/{id}', 'API\ProductController@update');
	Route::delete('products/{id}', 'API\ProductController@destroy');

	Route::post('login', 'API\PassportController@login');
Route::post('register', 'API\PassportController@register');
Route::group(['middleware' => 'auth:api'], function(){
Route::post('get-details', 'API\PassportController@getDetails');
});
Route::get('/','FileController@file');
Route::post('/store','FileController@store')->name('file.store');
