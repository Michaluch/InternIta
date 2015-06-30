 <?php

Route::get('/', function () {
    return view('welcome');
});



Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController'
]);
Route::get('/login', function () {
	return json_encode(User::all());
	//return view('welcome');
});