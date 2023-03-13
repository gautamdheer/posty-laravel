<?php

use Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
 
// home
Route::get('/', function () {
    return view('home');
})->name('home');


// login user
Route::get('/login', 'App\Http\Controllers\Auth\LoginController@index')->name('login');
Route::post('/login', 'App\Http\Controllers\Auth\LoginController@store');

// register user
Route::get('/register', 'App\Http\Controllers\Auth\RegisterController@index')->name('register');
Route::post('/register', 'App\Http\Controllers\Auth\RegisterController@store');

// logout user
Route::post('/logout', 'App\Http\Controllers\Auth\LogoutController@store')->name('logout');

// dashboard 
Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')
    ->name('dashboard')
    ->middleware('auth');

// posts 
    Route::get('/posts', 'App\Http\Controllers\PostController@index')->name('posts');
    Route::post('/posts', 'App\Http\Controllers\PostController@store');
    

 