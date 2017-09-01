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

// Beck - End//
//Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index');
//DB Group Food
Route::resource('groupsfood', 'GroupfoodController');
//DB Menu
Route::resource('menu', 'MenuController');
//DB Deck
Route::resource('deck', 'DeckController');
//insert form ajax
Route::post('/deck/store/', 'DeckController@store');
//get Data DB Twitter
Route::get('twitter/index', 'TwitterController@index');
Route::get('twitter/show', 'TwitterController@show');

//Font - End//
Route::get('/', 'IndexController@index');
Route::get('index', 'IndexController@index');
Route::get('form', 'IndexController@form');

Route::get('quiz/quizFood', 'QuizController@quizFood');
Route::resource('quiz', 'QuizController');

Auth::routes();