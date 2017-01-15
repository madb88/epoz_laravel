<?php

//Charts routes
Route::get('charts', 'ChartsController@index');
Route::get('charts/create', 'ChartsController@create');
Route::get('charts/{id}', 'ChartsController@show');
Route::post('charts', 'ChartsController@store');
