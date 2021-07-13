<?php

use Illuminate\Routing\Router;
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

Route::get('/', 'PageController@index')->name('home');
Route::get('/characters', 'PageController@characters')->name('characters');

/* Comics routes */
Route::get('/comics', 'PageController@comics')->name('comics');
Route::get('comics/{id}', 'PageController@comic')->name('comic');
/* Comics routes */

Route::get('movies', 'PageController@movies')->name('movies');
Route::get('tv', 'PageController@tv')->name('tv');
Route::get('games', 'PageController@games')->name('games');

/* Posts */
Route::get('news', 'PostController@index')->name('news');

/* /Posts */


Route::get('shop', 'PageController@shop')->name('shop');
