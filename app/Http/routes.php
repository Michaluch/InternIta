<?php

//Route::get('/', function () {
//    return view('welcome');
//});

Route::any('/', 'welcomeController@index');
//Route::get('profile', ['middleware' => 'auth', 'uses' => 'welcomeController@index']);