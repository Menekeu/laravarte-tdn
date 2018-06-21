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

Use App\Mail\ContactMessageCreated;

Route::get('/','PageController@home')->name('home');
Route::post('/lang','PageController@lang')->name('lang');

Route::get('/about','PageController@about')->name('about');
Route::get('/contact','ContactsController@create')->name('contact');

Route::post('/contact','ContactsController@store')->name('contact.store');

Route::get('/test-email',function (){
    return new ContactMessageCreated('patricia','patriciamenkeu@gmail.com',
                                    'merçi teacher du net');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
