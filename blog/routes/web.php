<?php

Route::get('/', 'LaravelController@index');

Route::get('/hakkimizda', 'LaravelController@about');

Route::get('/iletisim', 'LaravelController@contact');

Route::get('/yazi/{name?}', 'LaravelController@post');

Route::get('/arama', 'LaravelController@search');

Route::get('/kategori/{urlName?}', 'LaravelController@category');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@index', function () {

})->name('home');
Route::get('/admin/post/postlist', 'PostController@postList');
Route::get('/admin/post/create', 'PostController@postCreate');
Route::get('/admin/post/edit/{id?}', 'PostController@postEdit');
Route::get('/admin/post/delete/{id?}', 'PostController@postDelete');