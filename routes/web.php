<?php

//Charts routes
Route::get('charts', 'ChartsController@index');
Route::get('charts/{id}', 'ChartsController@show');
