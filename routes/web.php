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
Route::redirect('/', '/films', 301);

Auth::routes();

Route::get('/films', 'MoviesController@index')->name('movies.index');
Route::get('/films/{slug}', 'MoviesController@show')->name('movies.show');
Route::get('/films/create', 'MoviesController@create')->name('movies.create');
Route::post('/films/create', 'MoviesController@store');
Route::post('/review', 'MovieReviewsController@postReview');
Route::get('/home', 'HomeController@index')->name('home');
