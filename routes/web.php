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
Route::get('chat/{id}','ChatController@getAdd');
Route::get('/', 'BaseController@getIndex');
Route::get('/contacts','ContactController@getIndex');
Route::post('/contacts', 'ContactController@postIndex');
Route::get('{id}','BaseController@getPage');//nessesary in the end