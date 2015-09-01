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

// Pages routes...
Route::get('/', 'PageController@index');
Route::get('/contact-us', 'PageController@contact');
Route::get('/search/{query}', 'PageController@search');

// Products routes...
Route::get('products', 'ProductController@index');
Route::get('products/details/{id}', 'ProductController@details');
Route::get('products/categories', 'ProductController@categories');
Route::get('products/brands', 'ProductController@brands');

// Blog routes...
Route::get('/blog', 'BlogController@index');
Route::get('/blog/{id}', 'BlogController@show');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
