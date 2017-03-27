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

Route::get('/', 'MainController@home');
Route::get('/product/{slug}', 'MainController@show');
Route::get('/checkout', 'ShoppingCartController@index');
Route::get('/payment', 'ShoppingCartController@pay');

Route::resource('products', 'ProductsController');
Route::resource('checkout', 'inShoppingCartController',['only'=>['store','destroy']]);
Auth::routes();
