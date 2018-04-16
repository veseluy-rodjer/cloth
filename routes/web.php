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

Route::delete('/cloth/delPicture/{cloth}', 'ClothController@delPicture')->name('cloth.delPicture');

Route::get('/cloth/create/{cloth}', 'ClothController@create')->name('cloth.create');

Route::post('/cloth/store/{cloth}', 'ClothController@store')->name('cloth.store');

Route::resource('/cloth', 'ClothController')->except('create', 'store');

Route::resource('/cart', 'CartController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/', 'CategoryController', ['parameters' => ['' => 'category']]);

Route::get('/{category}', 'CategoryController@indexCategory')->name('indexCategory');
