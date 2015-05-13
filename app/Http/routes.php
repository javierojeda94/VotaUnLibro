<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// GET ROUTES
Route::get('/', 'HomeController@index');

Route::get('home','HomeController@index');

Route::get('books', 'BooksController@index');

Route::get('books/search', 'BooksController@search');

Route::get('books/new', 'BooksController@create');

Route::get('books/show/{id}', 'BooksController@show');

Route::get('profile','UsersController@profile');

// POST ROUTES
Route::post('review/new/{book_id}','ReviewsController@store');

Route::post('books/store','BooksController@store');

// CONTROLLER ROUTES
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);