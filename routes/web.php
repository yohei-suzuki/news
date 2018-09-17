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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('mypage')->group(function() {
    Route::get('/', 'UserDetailController@index')->name('user.index');
    Route::get('edit', 'UserDetailController@edit')->name('user.edit');
    Route::post('edit', 'UserDetailController@store')->name('user.store');
    Route::put('update', 'UserDetailController@update')->name('user.update');
});

Route::prefix('news')->group(function() {
    Route::get('/', 'NewsController@index')->name('news.index');
    Route::get('/{id}', 'NewsController@show')->name('news.show');
});

Route::prefix('search')->group(function() {
    Route::get('/', 'NewsSearchController@search')->name('news.search');
});

