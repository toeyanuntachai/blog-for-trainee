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

Route::group([
    'prefix' => 'posts',
    'as' => 'posts.'
], function () {
    Route::get('/', 'PostController@index')->name('list');
    Route::get('create', 'PostController@create')->name('create');
    Route::post('store', 'PostController@store')->name('store');
    Route::get('{post}/edit', 'PostController@edit')->name('edit');
    Route::post('{post}/update', 'PostController@update')->name('update');
    Route::get('{post}/destroy', 'PostController@destroy')->name('destroy');
});

Route::group([
    'prefix' => 'categories',
    'as' => 'categories.'
], function () {
    Route::get('/', 'CategoryController@index')->name('list');
    Route::view('create', 'categories.create')->name('create');
    Route::post('store', 'CategoryController@store')->name('store');
});