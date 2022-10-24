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

Route::get('/','controller1@showHome')
        ->name('home');

Auth::routes();

Route::get('/profile', 'UserController@showProfile')->name('profile');

Route::get('/cerca', 'UserController@search')->name('cerca');

Route::post('/richiesta', 'AmiciController@request')->name('richiesta');

Route::post('/accetta_richiesta', 'AmiciController@accept_request')->name('accetta_richiesta');

Route::post('/cancella_richiesta', 'AmiciController@delete_request')->name('cancella_richiesta');

Route::post('/messaggi', 'MessaggiController@getMessage')->name('messaggi');

Route::post('/amici', 'AmiciController@getAmici')->name('amici');