<?php

use Illuminate\Support\Facades\Route;
Route::view('/dashboard','layouts.Backend');
Route::view('/profile','layouts.Backend');

Route::get('/test','AdminController@test');
