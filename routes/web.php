<?php

use Illuminate\Support\Facades\Input;

/*
| Routes ke website
*/
Route::get('/', ['as'=>'root', 'uses'=>'root@index']);
// Route::get('login', ['as'=>'login', 'uses'=>'root@login']);
Route::get('about', ['as'=>'about', 'uses'=>'root@about']);
Route::get('contact', ['as'=>'contact', 'uses'=>'root@contact']);
Route::get('signup', ['as'=>'signup', 'uses'=>'root@signup']);
Route::get('select2', function(){
	$data = ['SD', 'SMP', 'SMA', 'Sarjana'];
	return View('employee.select2')->with('data', $data);
});
// Route::post('ceklogin', ['as'=>'ceklogin', 'uses'=>'root@ceklogin']);
// Route::post('storeemployee', ['as'=>'storeemployee', 'uses'=>'root@storeemployee']);

/*
| Routes reset password
*/
// Password Reset Routes...
/*Route::post('password/email', [
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
]);*/

/*
| Routes ke login form
*/
Auth::routes();

Route::get('logout', function(){
	Auth::logout();
	return Redirect::to('login');
});
