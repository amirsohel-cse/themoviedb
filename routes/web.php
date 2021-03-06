<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','MoviesController@index')->name('movies.index');
Route::get('movies/{gen_id}/genres','MoviesController@movies')->name('movies.list');


Route::get('/save_data','SaveDataController@save')->name('save.data');
