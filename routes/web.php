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

Route::group(['namespace' => 'Frontend'], function () {
    Route::get('/', function () {
        return redirect()->route('categories');
    });
    Route::get('categories', 'ProductController@index')->name('categories');
    Route::get('categories/ajax', 'FilterController@index');
});
