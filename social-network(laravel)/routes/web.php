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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logoutout', 'Auth\LoginController@logout')->name('logout');


/* client auth*/
Route::get('/client/login', 'clientRegisterController@index')->name('client.login');
Route::post('/client/login', 'clientRegisterController@login')->name('client.login.store');
Route::get('/client/register', 'clientRegisterController@create')->name('client.register');
Route::get('/client/logout', 'clientRegisterController@logoutclient')->name('client.logout');
Route::post('/client/register', 'clientRegisterController@store')->name('client_register.store');
Route::get('/index', 'ClientController@index')->name('client.index');
Route::get('/profile', 'ClientController@profile')->name('client.profile');
Route::post('/index', 'StatusController@store')->name('status');