<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('laravel'); });
Route::get('/carousel_no_repeated_elements', function () { return view('codepen.carousel_no_repeated_elements.index'); });