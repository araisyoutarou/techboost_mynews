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

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('news/create', 'Admin\NewsController@add');
    Route::post('news/create', 'Admin\NewsController@create'); # 13章追記
    Route::get('news', 'Admin\NewsController@index'); #15章追記
    Route::get('news/edit', 'Admin\NewsController@edit'); #16章追記
    Route::post('news/edit', 'Admin\NewsController@update'); #16章追記
    Route::get('news/delete', 'Admin\NewsController@delete'); #17章追記
    
    //profile
    Route::get('profile/create', 'Admin\ProfileController@add');
    Route::get('profile/edit', 'Admin\ProfileController@edit')->name('profile.edit');
    Route::post('profile/create', 'Admin\ProfileController@create'); # 13章追記
    Route::post('profile/edit', 'Admin\ProfileController@update'); # 13章追記
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
