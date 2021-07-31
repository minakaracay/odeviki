<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

Route::get('admin/login', function () {
    return view('admin.login');
});

/*
Route::view('admin', 'admin.index');
alttaki kod ile aynı işlemi yapar
eğer bir controller kullanmayacaksak bu daha kısa bir koddur */

Route::get('admin', function () {
    return view('admin.index');
}); 

Route::resource('cat', CatController::class);
Route::resource('user', UserController::class);
Route::resource('product', ProController::class);
Route::resource('cart', CartController::class);