<?php

use Illuminate\Support\Facades\Input;


/*
| Routes ke employee
*/

Route::group(['middleware' => 'auth'], function(){
	Route::get('employeehome', ['as'=>'employeehome', 'uses'=>'employee@index']);
	// Route::get('education', ['as'=>'education', 'uses'=>'employee@education']);
	// Route::get('skill', ['as'=>'skill', 'uses'=>'employee@skill']);
	Route::get('interview', ['as'=>'interview', 'uses'=>'employee@interview']);
	Route::resource('identities', 'IdentitiesController');
	Route::resource('educations', 'EducationsController');
	Route::resource('skills', 'SkillsController');
	Route::resource('experiences', 'ExperiencesController');
	Route::resource('references', 'ReferencesController');
	Route::resource('file','File');
	Route::resource('languages', 'LanguagesController');
	Route::resource('certificates', 'CertificatesController');
});

Route::post('list', 'ListController@find');
