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

Route::post('/upload-data','HomeController@uploadFile')->name('upload-data');
Route::post('/logout-data','HomeController@logout')->name('logout-data');

Route::get('/list','HomeController@display_list')->name('list');
Route::post('/update-data/{id?}','HomeController@update_data')->name('update_data');

Route::get('/edit/{id?}','HomeController@edit')->name('edit');

Route::get('/delete/{id?}','HomeController@delete')->name('delete')->middleware('admin');


