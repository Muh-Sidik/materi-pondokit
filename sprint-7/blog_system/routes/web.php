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

Route::get('/', 'BlogController@index');
// view
Route::get('/homepage', 'BlogController@homepage')->name('homepage');
Route::get('/create', 'BlogController@createIndexArticle');
Route::get('/addcategory', 'BlogController@createIndexCategory');
Route::get('/home/{id}/edit', 'BlogController@updateIndex')->name('edit');

//post
Route::post('/create/add', 'BlogController@create')->name('create');
Route::post('/addcategory/add', 'BlogController@createCategory')->name('addcategory');
Route::post('/home/update', 'BlogController@update')->name('update');

Auth::routes();

Route::get('/home/{id}/delete', 'HomeController@delete')->name('delete');
Route::get('/home', 'HomeController@index')->name('home');

