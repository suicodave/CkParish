<?php

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

use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'auth'], function () {
    Route::get('', 'Auth\\LoginController@showLoginForm')->name('auth.get');

    Route::post('', 'Auth\\LoginController@login')->name('auth.post');

    Route::get('logout', 'Auth\\LoginController@logout')->name('auth.logout');

    Route::get('change-password', 'Auth\\ChangePasswordController@showForm')->name('auth.change-password');

    Route::post('change-password', 'Auth\\ChangePasswordController@changePassword')->name('auth.change-password.change');
});


Route::group(['middleware' => ['auth', 'user.default-password']], function () {

    Route::get('/', 'HomeController@index')->name('home');

    Route::resource('roles', 'RoleController');

    Route::resource('permissions', 'PermissionController')->only('index');

    Route::resource('users', 'UserController');

    Route::resource('confirmations', 'ConfirmationController');
});
