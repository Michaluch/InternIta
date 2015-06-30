<?php

Route::get('/', function () {
    return view('welcome');
});



Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController'
]);
