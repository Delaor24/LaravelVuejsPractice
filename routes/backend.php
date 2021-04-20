<?php

use Illuminate\Support\Facades\Route;
Route::view('/','layouts.Backend');

Route::get('/test','AdminController@test');
