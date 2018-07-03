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




Route::get('/insert', 'NavController@insert');
Route::post('/book/insertAction', 'BookController@insertAction');

Route::get('/showBook', 'NavController@showBook');

Route::post('/deleteOne', 'BookController@deleteOne');

Route::post('/updateOne', 'NavController@update');
Route::post('/book/updateAction', 'BookController@updateAction');