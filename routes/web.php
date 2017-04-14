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

// 

Route::get('/', 'FrontController@index');


Auth::routes();


Route::group(['middleware' => 'auth'], function () {
   Route::get('/home', 'HomeController@index')->name('home');
   Route::resource('slide', 'SlideController');
 	 Route::resource('about', 'AboutController',['except' => [
 	 	'destroy','show'
 	 	]]);
 	 Route::resource('vision', 'VismisController',['except' => [
 	 	'destroy','show'
 	 	]]);
 	 Route::resource('category', 'CategoryController',['except'=>['show']]);
 	 Route::resource('product', 'ProductController');
});