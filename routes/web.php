<?php

use Illuminate\Support\Facades\Route;

# Admin Auth
Route::get('/admin-auth', '\App\Http\Controllers\AuthController@getAdminAuth')->name('getAdminAuth');
Route::post('/admin-auth', '\App\Http\Controllers\AuthController@postAdminAuth')->name('postAdminAuth');

Route::middleware(['adminMiddleware'])->group(function () {
    # Admin Logout
    Route::get('/logout', '\App\Http\Controllers\AuthController@getAdminLogout')->name('getAdminLogout');
    # Admin Dashboard
    Route::get('/dashboard', '\App\Http\Controllers\DashboardController@getDashboard')->name('getDashboard');
    Route::middleware(['adminMiddleware'])->group(function () {
        Route::get('/users', '\App\Http\Controllers\UserController@getUsers')->name('getUsers');
        Route::get('/add-user', '\App\Http\Controllers\UserController@getAddUser')->name('getAddUser');
        Route::post('/add-user', '\App\Http\Controllers\UserController@postAddUser')->name('postAddUser');
    });
});
