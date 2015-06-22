<?php

//Route::get('/', function () {
//    return view('welcome');
//});

Route::any('/', 'myAuthController@getLogin' );

//Route::get('profile', ['middleware' => 'auth', 'uses' => 'welcomeController@index']);
Route::any('/login', function() {
    return "as";
});
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
