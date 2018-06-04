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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'dishwashers@index')->name('index');


Route::post('/wish','dishwashers@insertWish')->name('wish');

Route::get('/wish','dishwashers@insertWish')->name('wish');

Route::post('/delete','dishwashers@deleteWish')->name('delete');