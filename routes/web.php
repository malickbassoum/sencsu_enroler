<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('admin/posts', function () {
        return view('posts');
    }); 

Route::get('admin/list_benef', function () {
        return view('list_benef');
    }); 
