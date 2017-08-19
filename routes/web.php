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



Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index');


Route::resource('groupsfood', 'GroupfoodController');
Route::resource('menu', 'MenuController');
Route::resource('deck', 'DeckController');

Route::get('twitter/index', 'TwitterController@index');
Route::get('twitter/show', 'TwitterController@show');