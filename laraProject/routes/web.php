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

Route::get('/','controller1@showHome')->name('home');

Auth::routes();

Route::get('/chi_siamo','controller1@showChiSiamo')->name('chi_siamo');

Route::get('/profile', 'UserController@showProfile')->name('profile');

Route::get('/cerca', 'UserController@search')->name('cerca');

Route::post('/richiesta', 'AmiciController@request')->name('richiesta');

Route::get('/accetta_richiesta', 'AmiciController@accept_request')->name('accetta_richiesta');

Route::get('/cancella_richiesta', 'AmiciController@delete_request')->name('cancella_richiesta');

Route::post('/messaggi', 'MessaggiController@getMessage')->name('messaggi');

Route::get('/amici', 'AmiciController@getAmici')->name('amici');

Route::get('/profileUser/{id}', 'UserController@getProfileUser')->name('profileUser');

Route::get('/blogsPage', 'userController@getBlogs')->name('blogsPage');

Route::get('/miei_blog', 'UserController@showMieiBlog')->name('miei_blog');

Route::view('/crea_blog', 'crea_blog')->name('crea_blog');

Route::post('/crea_blog', 'UserController@creaBlog')->name('crea_blog');

Route::get('/blog/{IDBlog}', 'PostController@getPosts')->name('blog');

Route::post('/crea_post/{IDBlog}', 'PostController@createPost')->name('crea_post');

Route::get('/elimina_amico/{id1}/{id2}', 'AmiciController@deleteFriend')->name('elimina_amico');

Route::get('/elimina_mioblog/{id}', 'UserController@elimina_mioblog')->name('elimina_mioblog');