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
