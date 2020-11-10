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

Route::get('/', 'MainController@home')->name('home');
Route::get('/news', 'MainController@news')->name('news');
Route::get('/picture_library', 'MainController@picture_library')->name('picture_library');
Route::get('/artist_room', 'MainController@artist_room')->name('artist_room');
Route::get('/about_us', 'MainController@about_us')->name('about_us');
Route::get('/contact_us', 'MainController@contact_us')->name('contact_us');
Route::post('/contact_us/submit', 'MainController@contact_form')->name('contact_form');
Route::get('/login', 'MainController@login')->name('login');
Route::get('/art', 'MainController@art')->name('art');
Route::get('/add_art', 'MainController@add_art')->name('add_art');
Route::get('/art/type/{art_id}', 'ArtController@show')->name('show_art');
