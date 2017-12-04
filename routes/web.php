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
Route::get('menu/getGroupMenu/{id}', 'MenuController@getGroupMenu');
//DB Cooking
Route::resource('cooking', 'CookingController');
//DB Deck
Route::resource('deck', 'DeckController');
Route::post('/deck/store/', 'DeckController@store'); //insert form ajax
Route::get('/home/view', 'HomeController@view'); //view foodAllergy
Route::get('deck/getRule/{id}', 'DeckController@getRule'); //getRule
Route::post('/deck/insertRule/', 'DeckController@insertRule'); //insert form Rule
//DB Nutrition
Route::resource('nutrition', 'NutritionController');

//--------------------------//
//Font - End//
//view Home
Route::get('/', 'IndexController@index');
Route::get('index', 'IndexController@index');
//view Recommend
Route::get('recommend/index', 'RecommendController@index');
Route::get('reviewMenu/reviewMenuView', 'RecommendController@reviewMenuView');
Route::get('reviewMenu/reviewMenuDetail', 'RecommendController@reviewMenuDetail');
//Route::get('reviewMenu/reviewMenuDetail/{id}', 'RecommendController@reviewMenuDetail');
Route::resource('posts', 'PostsController');
Route::resource('article', 'ArticleController');
//Route::get('article/articleView', 'RecommendController@articleView');
//Route::get('article/articleDetail', 'RecommendController@articleDetail');
//Route::get('article/articleDetail/{id}', 'RecommendController@articleDetail');


//view Quiz
Route::get('quiz/form', 'QuizController@form');
Route::get('quiz/quizFood', 'QuizController@quizFood');
Route::get('quiz/chart', 'QuizController@chart');
Route::resource('quiz', 'QuizController');
Route::get('quiz/getComposition/{id}', 'QuizController@getComposition');//getComposition
Route::get('quiz/getCooking/{id}', 'QuizController@getCooking');//getComposition

Auth::routes();