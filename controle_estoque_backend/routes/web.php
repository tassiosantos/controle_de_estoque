<?php

use Illuminate\Support\Facades\Route;



Route::namespace('API')->name(null)->group(function(){


    Route::get('/', 'ClienteController@index');



});