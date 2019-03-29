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
    return view('index');
});


Auth::routes();

Route::get('/configuration', 'ConfigurationController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/genre/all','GenreController@index');
Route::post('/genre', 'GenreController@store')->name('genre.store');
Route::get('/genre/{id}/delete', 'GenreController@destroy')->name('genre.delete');
Route::post('/country', 'CountryController@store')->name('country.store');
Route::get('/country/all', 'CountryController@index');
Route::get('/country/{code}/delete', 'CountryController@destroy')->name('country.delete');
Route::post('/language', 'LanguageController@store')->name('language.store');
Route::get('/language/all', 'LanguageController@index');
Route::get('/language/{code}/delete','LanguageController@destroy')->name('language.delete');
Route::get('/movie/{id}/{name}', 'MovieController@show')->name('movie.show');
Route::get('/movie', 'MovieController@index');

