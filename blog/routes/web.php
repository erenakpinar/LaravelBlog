<?php

Route::get('/', 'LaravelController@anasayfa');

Route::get('/hakkimizda', 'LaravelController@hakkimizda');

Route::get('/iletisim', 'LaravelController@iletisim');

Route::get('/yazi/{id?}', 'LaravelController@post',function($id){
    echo 'ID: '.$id;
});

