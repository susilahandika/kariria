<?php

use Illuminate\Support\Facades\Input;

/*
| Routes ke admin
*/

Route::group(['middleware' => 'auth'], function(){
    Route::get('admin', ['as'=>'admin', 'uses'=>'AdminController@index']);
    Route::get('candidates/find', ['as'=>'candidates.find', 'uses'=>'Admin\CandidatesController@find']);
    Route::post('candidates/insertInterview', ['as'=>'insertInterview', 'uses'=>'Admin\CandidatesController@insertInterview']);
    Route::resource('candidates', 'Admin\CandidatesController');
    Route::resource('cprofiles', 'Admin\CompanyprofilesController');
    Route::resource('weights', 'Admin\WeightsController');
});

Route::get('findSkillTypes', ['as'=>'findSkillTypes', 'uses'=>'SkillsController@findSkillTypes']);
Route::get('findLevels', ['as'=>'findLevels', 'uses'=>'EducationsController@findLevel']);
