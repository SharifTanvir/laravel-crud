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

Route::get('/input', function () {
    return view('welcome');
});
Route::get('/', 'PageuserController@index')->name('pageuser');
Route::get('/create', 'PageuserController@create')->name('pageuser-create');
Route::post('/store', 'PageuserController@store')->name('pageuser-store');
Route::get('/edit/{id}', 'PageuserController@edit')->name('pageuser-edit');
Route::post('/update/{id}', 'PageuserController@update')->name('pageuser-update');
Route::post('/delete/{id}', 'PageuserController@destroy')->name('pageuser-destroy');
