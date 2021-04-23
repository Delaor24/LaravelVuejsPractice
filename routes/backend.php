<?php

use Illuminate\Support\Facades\Route;
Route::view('/dashboard','layouts.Backend');
Route::view('/profile','layouts.Backend');
Route::view('/login','layouts.Backend');

Route::get('/test','AdminController@test');

//admin login
Route::post('login','AdminLoginController@login');
Route::get('logout','AdminLoginController@logout');

//admin info
Route::get('admin-info','AdminController@adminInfo');