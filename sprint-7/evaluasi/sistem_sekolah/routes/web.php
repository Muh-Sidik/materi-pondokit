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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/navbar', 'HomeController@navbar');

//sistem project
//view
Route::get('/menu', 'SystemController@menu');
Route::get('/menu/tambah', 'SystemController@menuTambah')->name('tambahData');
Route::get('/menu/addkelas', 'SystemController@class')->name('tambahRuang');
Route::get('/menu/{id}/detail', 'SystemController@detail')->name('detail');
Route::get('/menu/{id}/delete', 'SystemController@delete')->name('delete');
Route::get('/menu/{id}/edit', 'SystemController@edit')->name('edit');
Route::get('/menu/{id}/hapus', 'SystemController@deleteclass')->name('deleteclass');

//view jurusan
Route::get('/jurusan', 'HomeController@kelas');
Route::get('/jurusan/tambah', 'HomeController@inputKelas')->name('tambah');
Route::get('/jurusan/{id}/delete', 'HomeController@deleteSub')->name('deletesub');
Route::get('/jurusan/{id}/update', 'HomeController@updateIndex')->name('updatesubclass');
Route::get('/jurusan/{id}/detail', 'HomeController@detailsubclass')->name('detailsubclass');

//post
Route::post('/menu/addkelas/submit', 'SystemController@inputClass')->name('submitClass');
Route::post('/menu/tambah/submit', 'SystemController@input')->name('submitData');
Route::post('/menu/edit/submit', 'SystemController@update')->name('update');
Route::post('/jurusan/submit', 'HomeController@inputKelas')->name('input');
Route::post('/jurusan/update/submit', 'HomeController@update')->name('editsubclass');

//export
Route::get('/menu/detail/export', 'SystemController@export_excel')->name('export');

//contact
Route::get('/contact', 'SystemController@contact');

