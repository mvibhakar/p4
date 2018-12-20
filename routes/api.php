<?php

use Illuminate\Http\Request;

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

Route::get('/songs', 'SongController@index');
Route::post('/songs', 'SongController@create');
Route::post('/songs/{id}', 'SongController@update');
Route::delete('/songs/{id}', 'SongController@delete');

Route::get('/moods', 'MoodController@index');
Route::post('/moods', 'MoodController@create');
Route::get('/moods/{id}/songs', 'MoodController@moodWithSongs');
