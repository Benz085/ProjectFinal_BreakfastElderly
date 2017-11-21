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
//--------------------------//
//Font - End//
//view Home
Route::get('/', 'IndexController@index');
Route::get('index', 'IndexController@index');
//view Recommend
Route::get('recommend/index', 'RecommendController@index');
Route::get('reviewMenu/reviewMenuView', 'RecommendController@reviewMenuView');
Route::get('reviewMenu/reviewMenuDetail/{id}', 'RecommendController@reviewMenuDetail');
Route::resource('posts', 'PostsController');
Route::get('article/articleView', 'RecommendController@articleView');
Route::get('article/articleDetail/{id}', 'RecommendController@articleDetail');

Route::resource('comment', 'CommetsController');
Route::resource('reply', 'ReplyController');
//view Quiz
Route::get('form', 'IndexController@form');
Route::get('quiz/quizFood', 'QuizController@quizFood');
Route::get('quiz/chart', 'QuizController@chart');
Route::resource('quiz', 'QuizController');


Auth::routes();