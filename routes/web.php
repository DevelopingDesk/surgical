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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('create/stock','StockController@create')->name('create.stock');
Route::post('post/stock','StockController@store')->name('post.stock');

Route::get('viewstock','StockController@show')->name('view.stock');
//color

Route::get('get/color','ColorController@create')->name('create.color');
Route::post('post/color','ColorController@store')->name('store.color');
Route::post('edit/color','ColorController@edit')->name('edit.color');