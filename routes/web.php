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


Route::group(['middleware' => 'guest'], function () {
    Route::view('/', 'login')->name('login');
    Route::post('/login','LoginController@login')->name('login.submit');
	Route::view('/register', 'register')->name('showRegister');
	Route::post('/register', 'RegisterController@create')->name('register.submit');

});

Route::group(['middleware' => 'auth'], function () {
    Route::view('/welcome', 'welcome')->name('welcome');
    Route::get('/home', 'HomeController@index')->name('home');
    Route::post('/logout', 'LoginController@logout')->name('logout');
});