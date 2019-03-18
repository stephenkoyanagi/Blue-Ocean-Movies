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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/genre/all','GenreController@index');
Route::post('/genre', 'GenreController@store')->name('genre.store');
Route::post('/country', 'CountryController@store')->name('country.store');
Route::get('/country/all', 'CountryController@index');
Route::post('/language', 'LanguageController@store')->name('language.store');
Route::get('/language/all', 'LanguageController@index');

Route::get('/movie/{id}', 'MovieController@show');