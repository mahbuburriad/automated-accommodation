<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

Route::get('/', function () {
    return view('index');
});


Route::get('index', 'linkcontroller@index');
Route::get('login', 'linkcontroller@login');
Route::get('buy', 'linkcontroller@buy');
Route::get('rent', 'linkcontroller@rent');
Route::get('app_page', 'linkcontroller@app_page');
Route::get('pricing', 'linkcontroller@pricing');
Route::get('team', 'linkcontroller@team');
Route::get('about', 'linkcontroller@about');
Route::get('account', 'linkcontroller@account');
Route::get('editprofile', 'linkcontroller@editprofile');
Route::get('admin', 'linkcontroller@admin');
Route::get('home_details', 'linkcontroller@home_details');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');


Route::get('login/google', 'Auth\LoginController@redirectToProvider');
Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallback');

Route::resource('buy', 'PostadController');
//Route::resource('buy_shop', 'PostadController');
Route::get('rent', 'PostadController@rent');
Route::get('home_details', 'PostadController@home_details');