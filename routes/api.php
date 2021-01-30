<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('players','PlayerController@store');

Route::get('categories','CategoryController@index');
Route::get('categories/questions/{category_id}','CategoryController@questions');

Route::get('questions','QuestionController@index');
Route::get('questions/{id}','QuestionController@show');
Route::get('questions/answers/{question_id}','QuestionController@answers');

Route::post('rankings','RankingController@store');
