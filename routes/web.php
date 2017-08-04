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
Route::get('/galleries','ServicesController@getIndex');
Route::get('/gallery/{id}','GalleryController@getIndex');
Route::get('/styles','StylesController@getIndex');
Route::get('/order/{id}','StylesController@getOrder');
Route::get('/piercing','PiercingController@getIndex');
Route::get('/pierc/{id}','PiercingController@getOrder');
Route::get('/ajax','AjaxController@getGallery');
Route::get('{id}','BaseController@getPage');//nessesary in the end

Route::post('/contacts', 'ContactController@postIndex');