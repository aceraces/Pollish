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

Route::get('/', 'PagesController@index');
Route::get('/settings', 'PagesController@settings');
Route::get('/stats', 'PagesController@stats');
Route::get('/profile', 'PagesController@profile');
Route::get('/create_poll', 'PagesController@create_poll');
Route::get('/existing_polls', 'PagesController@existing_polls');
