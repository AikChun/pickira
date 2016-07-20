<?php

Route::get('/', function () {
    return view('pages.home');
});

Route::get('flyers', 'FlyersController@index');
Route::get('flyers/create', 'FlyersController@create');
