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

Route::get('/', function () {
    return view('moods', [
        'moods' => (new \App\Http\Controllers\MoodController)->index()
    ]);
});


Route::get('/moods', function() {
    return view('moods', [
        'moods' => (new \App\Http\Controllers\MoodController)->index()
    ]);
});

Route::get('/moods-songs/{id}', function($id) {
    return view('moodsongs', [
        'mood' => (new \App\Http\Controllers\MoodController)->moodWithSongs($id)
    ]);
});

Route::get('/moods/create', function() {
    return view('createmood', [
        'songs' => (new \App\Http\Controllers\SongController)->index()
    ]);
});

Route::get('/songs', function() {
    return view('songs', [
        'songs' => (new \App\Http\Controllers\SongController)->index()
    ]);
});

Route::get('/songs/create', function() {
    return view('createsong');
});

Route::get('/songs/edit/{id}', function($id) {
    return view('updatesong', [
        'song' => (new \App\Http\Controllers\SongController)->findById($id)
    ]);

});

Route::get('/songs/delete/{id}', function($id) {
    return (new \App\Http\Controllers\SongController)->delete($id);
});



