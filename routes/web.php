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

Route::get('/', 'HomeController@index')->name('home');

Route::group(['prefix' => 'auth'], function () {
    Route::get('', 'Auth\\LoginController@showLoginForm')->name('auth.get');

    Route::post('', 'Auth\\LoginController@login')->name('auth.post');

    Route::get('logout', 'Auth\\LoginController@logout')->name('auth.logout');
});
