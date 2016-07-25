<?php

Route::get('/', function () {
    return view('pages.home');
});

Route::get('{zip}/{street}', 'FlyersController@show');
Route::post('{zip}/{street}/photos', 'FlyersController@addPhoto');

Route::resource('flyers', 'FlyersController');
