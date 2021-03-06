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
//stock
Route::get('/home', 'HomeController@index');

Route::get('create/stock','StockController@create')->name('create.stock');
Route::post('post/stock','StockController@store')->name('post.stock');


Route::get('viewstock','StockController@show')->name('view.stock');
Route::post('shift/to/cleaning','StockController@shiftCleaning')->name('shift.cleaning');
//color

Route::get('get/color','ColorController@create')->name('create.color');
Route::post('post/color','ColorController@store')->name('store.color');
Route::post('edit/color','ColorController@edit')->name('edit.color');
//token

Route::get('get/token','TokenController@create')->name('create.token');
Route::post('post/token','TokenController@store')->name('store.token');
Route::post('edit/token','TokenController@edit')->name('edit.token');
//serial
Route::get('serial/create','SerialController@create')->name('create.serial');
Route::post('serial/store','SerialController@store')->name('store.serial');
Route::post('serial/edit','SerialController@edit')->name('edit.serial');
Route::get('serial/delete/{id}','SerialController@delete')->name('delete.serial');

//cleaning depart

Route::get('get/unclean/stock','CleaningController@unClean')->name('get.unclean');
Route::get('get/clean/stock','CleaningController@clean')->name('get.clean');
Route::post('get/clean/edit','CleaningController@shiftCoating')->name('shift.coating');


//coated
Route::get('get/coated/stock','CoatController@uncoat')->name('get.uncoat');
Route::get('get/coat/stock','CoatController@coat')->name('get.coat');
Route::post('get/coat/finish','CoatController@shiftFinish')->name('shift.finish');

//invoice

Route::get('create/invoice/{id}','InvoiceController@create')->name('create.invoice');
Route::get('get/store/invoice/{id}','InvoiceController@getStore')->name('getstore.invoice');
Route::post('post/store/invoice/','InvoiceController@postStore')->name('poststore.invoice');
