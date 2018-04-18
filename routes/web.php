<?php

use Illuminate\Support\Facades\Input;

/*
| Routes ke admin
*/
Route::get('admin', ['as'=>'admin', 'uses'=>'admin@index']);
Route::get('findemployee', ['as'=>'findemployee', 'uses'=>'admin@findemployee']);

/*
| Routes ke website
*/
Route::get('/', ['as'=>'root', 'uses'=>'root@index']);
// Route::get('login', ['as'=>'login', 'uses'=>'root@login']);
Route::get('about', ['as'=>'about', 'uses'=>'root@about']);
Route::get('contact', ['as'=>'contact', 'uses'=>'root@contact']);
Route::get('signup', ['as'=>'signup', 'uses'=>'root@signup']);
Route::post('ceklogin', ['as'=>'ceklogin', 'uses'=>'root@ceklogin']);
Route::post('storeemployee', ['as'=>'storeemployee', 'uses'=>'root@storeemployee']);

/*
| Routes reset password
*/
// Password Reset Routes...
Route::post('password/email', [
  'as' => 'password.email',
  'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail'
]);
Route::get('password/reset', [
  'as' => 'password.request',
  'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm'
]);
Route::post('password/reset', [
  'as' => '',
  'uses' => 'Auth\ResetPasswordController@reset'
]);
Route::get('password/reset/{token}', [
  'as' => 'password.reset',
  'uses' => 'Auth\ResetPasswordController@showResetForm'
]);

/*
| Routes ke employee
*/
Route::get('employeehome', ['as'=>'employeehome', 'uses'=>'employee@index']);
Route::get('profile', ['as'=>'profile', 'uses'=>'employee@profile']);
Route::get('education', ['as'=>'education', 'uses'=>'employee@education']);
Route::get('skill', ['as'=>'skill', 'uses'=>'employee@skill']);
Route::get('interview', ['as'=>'interview', 'uses'=>'employee@interview']);

/*
| Routes ke login form
*/
Auth::routes();

/*
// Authentication Routes...
Route::get('login', [
  'as' => 'login',
  'uses' => 'Auth\LoginController@showLoginForm'
]);
Route::post('login', [
  'as' => '',
  'uses' => 'Auth\LoginController@login'
]);
Route::post('logout', [
  'as' => 'logout',
  'uses' => 'Auth\LoginController@logout'
]);

// Password Reset Routes...
Route::post('password/email', [
  'as' => 'password.email',
  'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail'
]);
Route::get('password/reset', [
  'as' => 'password.request',
  'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm'
]);
Route::post('password/reset', [
  'as' => '',
  'uses' => 'Auth\ResetPasswordController@reset'
]);
Route::get('password/reset/{token}', [
  'as' => 'password.reset',
  'uses' => 'Auth\ResetPasswordController@showResetForm'
]);

// Registration Routes...
Route::get('register', [
  'as' => 'register',
  'uses' => 'Auth\RegisterController@showRegistrationForm'
]);
*/

Route::get('/home', 'HomeController@index')->name('home');
