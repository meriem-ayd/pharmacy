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
        Route::get('/liste_dci', '\App\Http\Controllers\DciController@listeDCI')->name('listeDCI');
        Route::get('/ajouter-dci', '\App\Http\Controllers\DciController@getDCI')->name('getDCI');
        Route::post('/ajouter-dci', '\App\Http\Controllers\DciController@postDCI')->name('ajouter_dci');
        //Route::post('ajouter-dci', [DciController::class, 'postDCI'])->name('ajouter_dci');


    });

    ////////////////////
    Route::get('medecin/dashboardMedecin', '\App\Http\Controllers\DashboardMedecinController@getDashboardMedecin')->name('getDashboardMedecin');
    Route::middleware(['DoctorMiddleware'])->group(function () {
        Route::get('/bons','\App\Http\Controllers\MedecinController@getBons')->name('getbons');


    });
});


