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
Route::get('/login','loginController@index')->name('login');
Route::post('login','loginController@login');
Route::get('registration','regController@registration');
Route::post('registration','registration@signup');
Route::get('adminpage','userController@admin');
Route::get('memberpage','userController@member');
Route::get('admininfo','userController@adminprofile');
Route::get('adminpro','userController@adminpro');