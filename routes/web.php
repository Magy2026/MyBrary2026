<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BasicController;


Route::get('/',[BasicController::class, 'index'])->name('home');

Route::get('/about', [BasicController::class, 'about'])->name('about');

Route::get('/books',[BasicController::class, 'books'])->name('books');

Route::get('/profile',[BasicController::class, 'profile'])->name('profile');

Route::get('/read',[BasicController::class, 'read'])->name('read');

Route::get('/write',[BasicController::class, 'write'])->name('write');

Route::get('/writers', [BasicController::class, 'writers'])->name('writers');

Route::get('/login', [BasicController::class, 'login'])->name('login');

Route::get('/register',[BasicController::class, 'register'])->name('register');

Route::post('/register', [BasicController::class, 'submit'])->name('register.post');

Route::post('/login', [BasicController::class, 'login'])->name('login');
Route::get('/profile', function() {
    return view('profile');
})->middleware('auth')->name('profile');


