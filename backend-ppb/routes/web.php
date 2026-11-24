<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/login');
});

Route::view('/', 'welcome');

Route::post('/auth', 'App\Http\Controllers\SiteController@auth');

Route::resource('product', ProductController::class);