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

Route::get('/','UserController@index');
// Route::post('/customer','CustomerController@store');
// Route::get('/show','CustomerController@show');
// Route::get('/customer/{id}/edit','CustomerController@edit');
// Route::post('/customer/{customer}','CustomerController@update');
// Route::get('/delete/{customer}','CustomerController@destroy');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Customer
Route::group(['prefix' => 'customer'], function () {
	Route::post('/store', 'CustomerController@store')->name('customer.store');
	Route::get('/{customer}/edit', 'CustomerController@edit')->name('customer.edit');
	Route::put('/{customer}/update', 'CustomerController@update')->name('customer.update');
	Route::get('/{id}/destroy', 'CustomerController@destroy')->name('customer.destroy');
});

