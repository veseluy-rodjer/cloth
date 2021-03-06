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
Route::get('/contact', 'ContactController@index')->name('contact.index');

Route::post('/contact', 'ContactController@store')->name('contact.store');

Route::get('/fail', 'PayController@fail')->name('fail');

Route::get('/success', 'PayController@success')->name('success');

Route::delete('/about/delPicture/{about}', 'AboutController@delPicture')->name('about.delPicture');

Route::resource('/about', 'AboutController');

Route::delete('/cloth/delPicture/{cloth}', 'ClothController@delPicture')->name('cloth.delPicture');

Route::get('/cloth/create/{cloth}', 'ClothController@create')->name('cloth.create');

Route::post('/cloth/store/{cloth}', 'ClothController@store')->name('cloth.store');

Route::resource('/cloth', 'ClothController')->except('create', 'store');

Route::post('/cart/booking', 'CartController@booking')->name('cart.booking');

Route::resource('/cart', 'CartController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/', 'CategoryController', ['parameters' => ['' => 'category']]);

Route::get('/{category}', 'CategoryController@indexCategory')->name('indexCategory');
