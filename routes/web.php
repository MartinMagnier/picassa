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

Route::get('/', 'PhotosController@index');
Route::get('/new', 'PhotosController@new')->middleware('auth')->name('new');
Route::post('/create', 'PhotosController@create')->middleware('auth')->name('create');
Route::get('/utilisateur/{id}', 'PhotosController@utilisateur')->where('id', '[0-9]+')->name('utilisateur');
Route::get('/suivi/{id}', 'PhotosController@suivi')->middleware('auth')->where('id', '[0-9]+');
Route::get('/recherche/{s}', 'PhotosController@recherche');

Route::get('/testajax', 'PhotosController@testajax');
Route::get('/album/{id}','PhotosController@album')->where('id','[0-9]+');