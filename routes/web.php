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

/* Route::get('/', function () {
    return view('welcome');
}); */
Route::redirect('/', '/movies', 301);

Auth::routes();

Route::get('/movies', 'MoviesController@index')->name('movies.index');
Route::get('/movies/{slug}', 'MoviesController@show')->name('movies.show');
Route::get('/movies/create', 'MoviesController@create')->name('movies.create');
Route::post('/movies/create', 'MoviesController@store');
Route::post('/review', 'MovieReviewsController@postReview');
Route::get('/home', 'HomeController@index')->name('home');
