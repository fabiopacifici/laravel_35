<?php

use Illuminate\Support\Facades\Route;

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

    return view('home');
})->name('home');


Route::get('/characters', function () {
    return 'characters Page';
})->name('characters');


/* Comics routes */

Route::get('/comics', function () {
    $comics = config('comics.data');
    //ddd($comics);
    return view('comics.index', compact('comics'));
})->name('comics');

Route::get('comics/{id}', function ($id) {
    $comics = config('comics.data');
    //ddd($comics[$id]);
    if (is_numeric($id) && $id < count($comics) && $id >= 0) {
        $comic = $comics[$id];
        return view('comics.show', compact('comic'));
    } else {
        abort(404);
    }
})->name('comic');

/* Comics routes */


Route::get('/movies', function () {
    return 'Movies Page';
})->name('movies');
Route::get('/tv', function () {

    return 'TV Page';
})->name('tv');
Route::get('/games', function () {

    return 'Games Page';
})->name('games');

Route::get('/news', function () {

    return 'News Page';
})->name('news');

Route::get('/shop', function () {
    return 'Shop Page';
})->name('shop');