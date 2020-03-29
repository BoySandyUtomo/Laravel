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

Route::group(['middleware' => 'auth'], function(){
// Admin Des
Route::get('/admin', 'AdminController@index');
Route::get('/create', 'AdminController@create');
Route::post('/store', 'Admincontroller@store');
Route::get('/edit', 'AdminController@edit');
Route::get('/delete/{id}', 'AdminController@destroy');
Route::get('/update/{id}', 'AdminController@update');
Route::post('/updateStore/{id}', 'AdminController@updateStore');

// Admin Cat
Route::get('/createCat', 'AdminController@createCat');
Route::get('/editCat', 'AdminController@editCat');
Route::post('/storeCat', 'Admincontroller@storeCat');
Route::get('/updateCat/{id_cat}', 'AdminController@updateCat');
Route::post('/updateCatStore/{id_cat}', 'AdminController@updateCatStore');
Route::get('/deleteCat/{id_cat}', 'AdminController@destroyCat');
Route::get('/exportExcelCat', 'AdminController@exportExcelCat');
Route::get('/exportExcel', 'AdminController@exportExcel');
Route::get('/exportPdf', 'AdminController@exportPDF');
});
// User

Auth::routes();

Route::get('/', 'UserController@index');
Route::get('/detail/{id}', 'UserController@detail');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('auth/google', 'Auth\GoogleController@redirectToGoogle');
Route::get('auth/google/callback', 'Auth\GoogleController@handleGoogleCallback');
