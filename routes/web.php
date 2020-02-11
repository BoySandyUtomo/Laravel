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
//     return view('index');
// });

Route::get('/', 'PagesController@index');

Route::post('/product/store', 'PagesController@store');

Route::get('/product/delete/{id}', 'PagesController@delete'); 

Route::get('/product/edit/{id}', 'PagesController@edit');

Route::post('/product/update/{id}', 'PagesController@update');

Route::get('/product/cari/', 'PagesController@cari');