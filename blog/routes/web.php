<?php

Route::get('/', 'LaravelController@index');

Route::get('/hakkimizda', 'LaravelController@about');

Route::get('/iletisim', 'LaravelController@contact');

Route::get('/yazi/{name?}', 'LaravelController@post');

Route::get('/arama', 'LaravelController@search');

Route::get('/kategori/{urlName?}', 'LaravelController@category');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@index')->name('home');
