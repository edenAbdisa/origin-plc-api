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

Route::get('/containertype','ContainertypeController@index');
Route::get('/containertype/{id}','ContainertypeController@show');
Route::post('/containertype','ContainertypeController@store');
Route::put('/containertype/{id}','ContainertypeController@update');
Route::delete('/containertype/{id}','ContainertypeController@destroy');

Route::get('/djiclearing','DjiclearingController@index');
Route::get('/djiclearing/{id}','DjiclearingController@show');
Route::post('/djiclearing','DjiclearingController@store');
Route::put('/djiclearing/{id}','DjiclearingController@update');
Route::delete('/djiclearing/{id}','DjiclearingController@destroy');

Route::get('/ethclearing','EthclearingController@index');
Route::get('/ethclearing/{id}','EthclearingController@show');
Route::post('/ethclearing','EthclearingController@store');
Route::put('/ethclearing/{id}','EthclearingController@update');
Route::delete('/ethclearing/{id}','EthclearingController@destroy');

Route::get('/item','ItemController@index');
Route::get('/item/{id}','ItemController@show');
Route::post('/item','ItemController@store');
Route::put('/item/{id}','ItemController@update');
Route::delete('/item/{id}','ItemController@destroy');

Route::get('/itemtype','ItemtypeController@index');
Route::get('/itemtype/{id}','ItemtypeController@show');
Route::post('/itemtype','ItemtypeController@store');
Route::put('/itemtype/{id}','ItemtypeController@update');
Route::delete('/itemtype/{id}','ItemtypeController@destroy');

Route::get('/responsefromwebsite','ResponsefromwebsiteController@index');
Route::get('/responsefromwebsite/{id}','ResponsefromwebsiteController@show');
Route::post('/responsefromwebsite','ResponsefromwebsiteController@store');
Route::put('/responsefromwebsite/{id}','ResponsefromwebsiteController@update');
Route::delete('/responsefromwebsite/{id}','ResponsefromwebsiteController@destroy');