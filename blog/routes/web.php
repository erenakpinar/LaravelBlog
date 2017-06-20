<?php

Route::get('/', 'LaravelController@anasayfa');

Route::get('/hakkimizda', 'LaravelController@hakkimizda');

Route::get('/iletisim', 'LaravelController@iletisim');

Route::get('/yazi-detay/{id?}', 'LaravelController@post',function($id){
    echo 'ID: '.$id;
});
