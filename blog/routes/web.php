<?php

Route::get('/', 'LaravelController@anasayfa');

Route::get('/hakkimizda', 'LaravelController@hakkimizda');

Route::get('/iletisim', 'LaravelController@iletisim');

Route::get('/yazi-detay/{id?}', 'LaravelController@post',function($id){
    echo 'ID: '.$id;
});
Route::get('yazilar', function(){
    $yazilar = DB::table('post')->get();

    foreach($yazilar as $yazi){
        echo $yazi->name." ";
    }

});
