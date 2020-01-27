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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'QuoteController@index');
Route::get('/quotes/show', 'QuoteController@show')->name('quotes.show');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile', 'ProfileController@profile')->name('profile');
Route::post('/profileupdate', 'ProfileController@profileUpdate')->name('profileupdate');
Route::get('/changepassword', 'ProfileController@changepassword')->name('changepassword');
Route::post('/changepassword', 'ProfileController@changePwd')->name('changePwd');
Route::get('/profilepicture', 'ProfileController@profileAvatar')->name('profileavatar');
Route::post('/profilepictureupload', 'ProfileController@profilePictureUpload')->name('profilepictureupload');
