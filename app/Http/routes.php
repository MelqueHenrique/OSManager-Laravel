<?php

Route::get('/', 'OsController@index');
Route::get('/os', 'OsController@lista');
Route::get('/os/novo', 'OsController@formNovo');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
