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


Route::get('/', 'NoteController@list')->name('list');
Route::get('/create', 'NoteController@create')->name('create');
Route::get('/show/{id}', 'NoteController@show')->name('show');
Route::get('/edit/{id}', 'NoteController@edit')->name('edit');
Route::put('/update/{id}', 'NoteController@update')->name('update');
Route::post('/store', 'NoteController@store')->name('store');
Route::delete('/destroy/{id}', 'NoteController@destroy')->name('destroy');
Route::get('/search', 'NoteController@search')->name('search');

Route::get('download', 'PDFController@download')->name('downloadPDF');


