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

//Like route
Route::get('post','PostController@index');
Route::get('post/{slug?}','PostController@show')->name('post');
Route::post('/like','PostController@getlike');
Route::post('/like/{id}','PostController@like');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
