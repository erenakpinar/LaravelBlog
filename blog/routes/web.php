<?php

Route::get('/', 'LaravelController@index');

Route::get('/hakkimizda', 'LaravelController@about');

Route::get('/iletisim', 'LaravelController@contact');

Route::get('/yazi/{id?}', 'LaravelController@post',function($id){
    echo 'ID: '.$id;
});

