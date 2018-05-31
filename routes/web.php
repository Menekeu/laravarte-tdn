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

Route::get('/','PageController@home')->name('home');
Route::get('/about','PageController@about')->name('about');
Route::get('/contact','ContactsController@create')->name('contact');

Route::post('/contact','ContactsController@store')->name('contact.store');
