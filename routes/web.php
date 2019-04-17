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
    return view('homepage');
});


//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => 'webdevelopment'], function() {
    Route::get('html', 'Web\HtmlController@index' )->name('html');
    Route::get('html/{filename}', 'Web\HtmlController@showFile' )->name('showfile');
});