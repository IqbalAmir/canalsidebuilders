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

Route::get('/', 'Controller@index');
Route::get('/about', 'Controller@about');
Route::get('/services', 'Controller@services');

Route::resource('posts', 'PostsController');
Route::resource('accounts', 'AccountController');
Route::resource('orders', 'OrdersController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
