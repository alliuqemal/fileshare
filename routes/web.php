<?php

use App\Enums\RoleEnum;
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

        Route::get("/gallery")
            ->uses("FileController@Gallery")
            ->name("files.gallery");

        Route::post('/files/upload')
            ->uses('FileController@uploadPost')
            ->name('files.upload.post');

        Route::get('/files/all')
            ->uses('FileController@showAll')
            ->name('files.all');

        Route::get('/files/shared')
            ->uses('FileController@showShared')
            ->name('files.all');

        Route::get('/files/trash')
            ->uses('FileController@showTrash')
            ->name('files.trash');

        Route::post('/files/sendFile/{fileid}')
            ->uses('FileController@sendFile')
            ->name('files.sendFile');


        Route::prefix('admin')
            ->middleware('role:'. RoleEnum::ADMINISTRATOR)
            ->as('admin.')
            ->group(function () {

                Route::get('/users')
                    ->uses('UsersController@index')
                    ->name('users.index');

                Route:: post ('/users/promote/{user}')
                    ->uses('UsersController@promote')
                    ->name ('users.promote');

                Route::post('/users/demote/{user}')
                    ->uses('UsersController@demote')
                    ->name('users.demote');

                Route::delete('/users/{user}')
                    ->uses('UsersController@destroy')
                    ->name('users.delete');
            });

    });
