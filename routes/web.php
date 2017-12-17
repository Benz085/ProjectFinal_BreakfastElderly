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
Route::resource('reviewMenu', 'ReviewMenuController');
Route::get('recommend/getArticle/', 'RecommendController@getArticle');
Route::get('recommend/getArticle/{id}', 'RecommendController@show');

Route::resource('article', 'ArticleController');
Route::get('article/index2', 'ArticleController@index2');


//view Quiz
Route::get('quiz/form', 'QuizController@form');
Route::get('quiz/quizFood', 'QuizController@quizFood');
Route::get('quiz/chart', 'QuizController@chart');
Route::resource('quiz', 'QuizController');
Route::get('quiz/getDeck/{id}', 'QuizController@getDeck');//getDeck
Route::get('quiz/getComposition/{id}', 'QuizController@getComposition');//getComposition
Route::get('quiz/getCooking/{id}', 'QuizController@getCooking');//getComposition

Route::resource('profile', 'ProfileController');



Auth::routes();