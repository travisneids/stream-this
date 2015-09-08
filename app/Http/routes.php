<?php

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

Route::post('/customers/search', 'CustomerController@search');
Route::resource('/customers', 'CustomerController');
Route::resource('/movies', 'MovieController');
Route::resource('/rentals', 'RentalController');

Route::get('/', function() {
    return view('pages.home');
});
