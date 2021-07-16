<?php

use App\Http\Controllers\ProductController;
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
//Route::get('/comics', 'PageController@comics')->name('comics');
//Route::get('comics/{id}', 'PageController@comic')->name('comic');
Route::resource('comics', ComicController::class);

/* Comics routes */

//Route::get('movies', 'PageController@movies')->name('movies');
Route::get('tv', 'PageController@tv')->name('tv');
Route::get('games', 'PageController@games')->name('games');
Route::get('shop', 'PageController@shop')->name('shop');


Route::get('posts', 'PostController@index')->name('posts');
Route::get('posts/create', 'PostController@create')->name('posts.create');
Route::post('posts', 'PostController@store')->name('posts.store');
Route::get('posts/{post}', 'PostController@show')->name('posts.show');
Route::get('posts/{post}/edit', 'PostController@edit')->name('posts.edit');
Route::put('posts/{post}', 'PostController@update')->name('posts.update');
Route::delete('posts/{post}', 'PostController@destroy')->name('posts.delete');
/* /Posts */

/* Route resource */
Route::resource('movies', MovieController::class);


/* Products Routes */

//Route::resource('products', ProductController::class);
Route::resource('products', 'ProductController');
