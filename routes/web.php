<?php

//Charts routes

Route::resource('charts', 'ChartsController');

Auth::routes();

Route::get('/home', 'HomeController@index');
