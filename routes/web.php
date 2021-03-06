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
Route::get('create/','HomeController@create')->name('create');
Route::post('create/','HomeController@store')->name('store');
Route::get('edit/{id}','HomeController@edit')->name('edit');
Route::post('update/{id}','HomeController@update')->name('update');
Route::delete('delete/{id}','HomeController@delete')->name('delete');


