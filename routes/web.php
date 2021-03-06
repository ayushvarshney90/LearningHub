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
Route::get('/','pagescontroller@home')->name('home');
Route::resource('posts','PostController');
Route::resource('question','QuestionController');
Route::get('/forum','pagescontroller@forum');
Route::get('/resources','pagescontroller@resources');
Route::get('/createpost','PostController@create');
Route::get('/video','pagescontroller@video');
Route::get('/profile','pagescontroller@profile');
Route::get('/vqa','pagescontroller@viewquestion');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
