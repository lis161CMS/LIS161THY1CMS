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

Route::resource('navtype', 'NavTypeController');

Route::resource('navigation', 'NavigationController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*Route::resource('/admin/content', 'Admin\ContentController')->middleware('auth');
Route::post('/admin/content-reversions/{revision}', 'Admin\ContentReversionsController@store')->middleware('auth');*/