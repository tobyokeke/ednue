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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Auth::routes();

Route::get('/','PublicController@index')->name('frontend.home');
Route::get('about','PublicController@about')->name('frontend.about');
Route::get('project','PublicController@causes')->name('frontend.causes');
Route::get('project/{cause}','PublicController@causeDetails')->name('frontend.cause.details');
Route::get('team','PublicController@team')->name('frontend.team');
Route::get('contact','PublicController@contact')->name('frontend.contact');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout','HomeController@logout');

Route::get('/export','HomeController@exportRegistrations')->name('export');
Route::post('join','PublicController@postJoin')->name('join.post');