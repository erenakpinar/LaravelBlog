<?php

Route::get('/', 'LaravelController@index');

Route::get('/hakkimizda', 'LaravelController@about');

Route::get('/iletisim', 'LaravelController@contact');

Route::get('/yazi/{name?}', 'LaravelController@post');

Route::get('/arama/{value?}', 'LaravelController@search');
