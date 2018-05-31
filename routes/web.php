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

##Route::get('/home', 'HomeController@index')->name('home');
Route::post('navigation.navupdate', 'NavigationController@navupdate');
Route::resource('navtype', 'NavTypeController');

Route::group([ 'middleware' => ['auth', 'admin']], function()
{
  Route::get('adminhome', 'HomeController@admin')->name('home.admin');
  Route::resource('users', 'UserController');
  Route::resource('permissions', 'PermissionController');
  Route::resource('navigation','NavigationController');
  Route::resource('admincontent', 'AdmincontentController');
  Route::get('owncontent', 'AdmincontentController@user')->name('content.admin');
});

Route::group([ 'middleware' => ['auth', 'user']], function()
{
  Route::get('home', 'HomeController@user')->name('home.user');
  Route::resource('contents', 'ContentController');
    Route::get('usercontent', 'ContentController@user')->name('content.user');
});


/*Route::resource('/admin/content', 'Admin\ContentController')->middleware('auth');
Route::post('/admin/content-reversions/{revision}', 'Admin\ContentReversionsController@store')->middleware('auth');*/
