<?php

use Illuminate\Support\Facades\Input;

/*
| Routes ke admin
*/

Route::group(['middleware' => 'auth'], function(){
    Route::get('admin', ['as'=>'admin', 'uses'=>'AdminController@index']);
    Route::get('candidates/find', ['as'=>'candidates.find', 'uses'=>'Admin\CandidatesController@find']);
    Route::resource('candidates', 'Admin\CandidatesController');
});
