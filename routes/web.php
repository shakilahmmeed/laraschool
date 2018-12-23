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

Route::get('home', function() {
    return redirect(route('admin'));
});

Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => 'auth', 'namespace' => 'admin'], function() {

    Route::get('/', 'AdminController@dashboard')->name('admin');
    Route::get('dashboard', 'AdminController@dashboard')->name('dashboard');
    Route::get('profile', 'AdminController@profile')->name('profile');
    Route::get('media-all', 'AdminController@mediaAll')->name('media-all');
    Route::get('upload', 'AdminController@upload')->name('upload');
    Route::get('notice-all', 'AdminController@noticeAll')->name('notice-all');
    Route::get('notice-new', 'AdminController@noticeNew')->name('notice-new');
    Route::get('teachers', 'AdminController@teachers')->name('teachers');
    Route::get('institute', 'Admincontroller@institute')->name('institute');
});
