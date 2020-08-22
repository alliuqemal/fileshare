<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/files/shared', function () {
    return view('files.shared');
});
Auth::routes();

Route::middleware('auth')
    ->group(function () {

        Route::get('/')
            ->uses('DashboardController@index')
            ->name('dashboard.index');

        Route::get('/profile/edit')
            ->uses('ProfileController@edit')
            ->name('profile.edit');

        Route::post('/profile/edit')
            ->uses('ProfileController@update')
            ->name('profile.update');

        Route::get('/files/upload')
            ->uses('FileController@upload')
            ->name('files.upload');

        Route::get('/files/all')
            ->uses('FileController@showAll')
            ->name('files.all');

    });
