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


Route::view('/admin', 'admin.index');
Route::view('/store', 'admin.store');
Route::view('/medicine', 'admin.med');
Route::post('/store_submit','store@submit_store');
Route::post('/med','med@submit_med');
