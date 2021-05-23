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

Auth::routes(['register' => false]);

//user routes
Route::group(['namespace' => 'User', 'prefix' => 'user', 'middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/family_checkin/{family_id}', 'CheckinController@check_in')->name('check_in');
    Route::post('/checkin', 'CheckinController@store')->name('post_check_in');

});

Route::group(['namespace' => 'Manage', 'prefix' => 'manage', 'as' => 'manage.', 'middleware' => 'role:superadministrator|administrator'], function () {
    Route::resource('/check_numbers', 'CheckNumberController')->name('*','check_numbers');
    Route::resource('/children', 'ChildrenController')->name('*','children');
    Route::resource('/families', 'FamilyController')->name('*','families');
    Route::resource('/users', 'UserController')->name('*','users');
    Route::get('/menu', 'MenuController@index')->name('menu');
});



