<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('static.home');
});
Route::get('/about', function () {
    return view('static.about');
});
Route::get('/books', function () {
    return view('static.books');
});
Route::get('/profile', function () {
    return view('static.profile');
});
Route::get('/read', function () {
    return view('static.read');
});
Route::get('/write', function () {
    return view('static.write');
});
Route::get('/writers', function () {
    return view('static.writers');
});