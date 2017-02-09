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

Route::get('/', 'Auth\LoginController@showLoginForm');
Route::post('Authentication', 'Auth\LoginController@login');
Route::get('ShowRegisterUsers', 'Auth\RegisterController@showRegistrationForm');
Route::post('SaveRegisterUsers', 'Auth\RegisterController@register');
