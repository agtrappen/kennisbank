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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('article', 'ArticleController@index');
Route::get('category', 'CategoryController@index');
Route::group(['prefix' => 'article'], function () {
    Route::post('add', 'ArticleController@add');
    Route::get('details/{id}', 'ArticleController@show');
});
