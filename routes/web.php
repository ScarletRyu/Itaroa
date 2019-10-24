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

Route::get('/', 'StoreController@index');
Route::get('create_product', 'StoreController@form')->name('form');


Route::resource('stores', 'StoreController')->only('index', 'show');
Route::resource('products', 'ProductController')->only('show', 'store', 'update', 'destroy');


