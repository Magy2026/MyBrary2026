<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('static.home');
})->name('home');

Route::get('/about', function () {
    return view('static.about');
})->name('about');

Route::get('/books', function () {
    return view('static.books');
})->name('books');

Route::get('/profile', function () {
    return view('static.profile');
})->name('profile');

Route::get('/read', function () {
    return view('static.read');
})->name('read');
Route::get('/write', function () {
    return view('static.write');
})->name('write');

Route::get('/writers', function () {
    return view('static.writers');
})->name('writers');

Route::get('/login', function () {
    return view('static.login');
})->name('login');

Route::get('/register', function () {
    return view('static.register');
})->name('register');

