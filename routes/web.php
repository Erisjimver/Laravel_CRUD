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
Route::resource("productos","ProductosController");

Route::get('/', function () {
    return view('welcome');
});

/*
Route::get('/inicio','ProductosController@index');

Route::get('/create','ProductosController@create');

Route::get('/update','ProductosController@update');

Route::get('/insert','ProductosController@store');

Route::get('/delete','ProductosController@destroy');

*/