<?php

use Illuminate\Support\Facades\Input;

/*
| Routes ke admin
*/

Route::group(['middleware' => 'auth'], function(){
  Route::get('admin', ['as'=>'admin', 'uses'=>'AdminController@index']);
  Route::resource('candidates', 'Admin\CandidatesController');
});
