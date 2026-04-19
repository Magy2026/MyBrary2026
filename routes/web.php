<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BasicController;
use App\Http\Controllers\CreativeController;
use App\Http\Controllers\UserController;

Route::get('/',[BasicController::class, 'index'])->name('home');

Route::get('/about', [BasicController::class, 'about'])->name('about');

Route::get('/creatives',[CreativeController::class, 'all'])->name('creatives.all');
Route::get('/creatives/public/{creative}',[CreativeController::class, 'publicShow'])->name('creatives.public-show');

Route::get('/profile',[BasicController::class, 'profile'])->name('profile')->middleware('auth');
Route::post('/profile/image',[BasicController::class, 'uploadImage'])->name('profile.image');
Route::post('/profile/update',[BasicController::class, 'update'])->name('profile.update');

Route::get('/read',[BasicController::class, 'read'])->name('read');

Route::get('/write',[BasicController::class, 'write'])->name('write');

Route::get('/writers', [UserController::class, 'writers'])->name('writers');

Route::get('/login', [BasicController::class, 'login'])->name('login.form');
Route::post('/login', [BasicController::class, 'tolog'])->name('login');

Route::post('/logout',function (){
    Auth::logout();
    return redirect('/login');})->name('logout');

Route::get('/register',[BasicController::class, 'register'])->name('register');
Route::post('/register', [BasicController::class, 'submit'])->name('register.post');

Route::post('/creative', [CreativeController::class, 'store'])->name('creative.store')->middleware('auth');

Route::middleware('auth')->group(function () {

    Route::get('/creative', [CreativeController::class, 'index'])
        ->name('creative.index');

    Route::get('/creative/create', [CreativeController::class, 'create'])
        ->name('creative.create');

    Route::post('/creative', [CreativeController::class, 'store'])
        ->name('creative.store');

    Route::get('/creative/{creative}', [CreativeController::class, 'show'])
        ->name('creative.show');

    Route::get('/creative/{creative}/edit', [CreativeController::class, 'edit'])
    ->name('creative.edit');

    Route::put('/creative/{creative}', [CreativeController::class, 'update'])
    ->name('creative.update');

    Route::delete('/creative/{creative}', [CreativeController::class, 'destroy'])
    ->name('creative.destroy');
});


Route::get('/writers/{user}', [UserController::class, 'show'])->name('writers.show');