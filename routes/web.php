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
    return view('guest.welcome');
});

Auth::routes();

//user routes
Route::group(['namespace' => 'User', 'prefix' => 'user', 'middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index')->name('home');
});

Route::group(['namespace' => 'Manage', 'prefix' => 'manage'], function () {
    Route::resource('/check-number', 'CheckNumberController')->name('*','manage.check_number');
    Route::resource('/children', 'ChildrenController')->name('*','manage.children');
    Route::resource('/family', 'FamilyController')->name('*','manage.family');
    Route::resource('/user', 'UserController')->name('*','manage.user');
});



