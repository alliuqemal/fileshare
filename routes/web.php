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
            ->uses('FilesController@upload')
            ->name('files.upload');

        Route::post('/files/restore/{id}')
            ->uses('FilesController@restore')
            ->name('files.restore');

        Route::post('/files/trash/{id}')
            ->uses('FilesController@softDelete')
            ->name('files.softDelete');

        Route::post('/files/delete/{id}')
            ->uses('FilesController@permDelete')
            ->name('files.permDelete');

        Route::get("/gallery")
            ->uses("FilesController@Gallery")
            ->name("files.gallery");

        Route::post('/files/upload')
            ->uses('FilesController@uploadPost')
            ->name('files.upload.post');



        Route::get('/files/')
            ->uses('FilesController@index')
            ->name('files.index');

        Route::get('/files/all')
            ->uses('FilesController@showAll')
            ->name('files.all');

        Route::get('/shares/')
            ->uses('ShareController@index')
            ->name('shares.index');

        Route::get('/files/trash')
            ->uses('FilesController@showTrash')
            ->name('files.trash');

        Route::get('/files/download/{id}')
            ->uses('FilesController@download')
            ->name('files.download');

        Route::post('/shares/')
            ->uses('ShareController@store')
            ->name('shares.store');


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
