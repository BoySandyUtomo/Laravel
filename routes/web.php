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


Auth::routes();

// Admin Des
Route::get('/', 'AdminController@index');
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

// User
// Route::get('/', 'UserController@index');

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('admin', 'AdminController');
