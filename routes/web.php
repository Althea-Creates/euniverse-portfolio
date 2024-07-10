<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/writings', function () {
    return view('writings');
});
Route::get('/projects', function () {
    return view('projects');
});
