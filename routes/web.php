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

// Route::get('/', function () {
//     return view('welcome');
// });

// ADDING A CONTROLLER TO ROUTE

// PRODUCT ROUTE
Route::get('/', 'ProductsController@index');

Route::get('/products/create', 'ProductsController@create')->name('products.create');

Route::post('/products', 'ProductsController@store')->name('products.store');

Route::get('/products/{id}', 'ProductsController@show')->name('products.show');

Route::get('/products/{id}/edit', 'ProductsController@edit')->name('products.edit');

Route::put('/products/{id}', 'ProductsController@update')->name('products.update');

Auth::routes();

// INCLUDE ROUTES FROM PRODUCTS CONTROLLER

// Route::get('/home', 'HomeController@index')->name('home');
