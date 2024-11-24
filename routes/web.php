<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/upload', function () {
    return view('upload');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/map', function () {
    return view('map');
});
Route::get('/coral', function () {
    return view('coral');
});
