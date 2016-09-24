<?php

Route::get('/', function () {
    return view('welcome');
});

// Route::resource('dht11', 'Dht11Controller');

Route::group(['prefix'=>'api/v1', 'middleware' => ['cors']], function(){
	Route::resource('dht11', 'Dht11Controller');

});
