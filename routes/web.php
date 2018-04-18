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
Route::get('login', ['as'=>'login', 'uses'=>'root@login']);
Route::get('about', ['as'=>'about', 'uses'=>'root@about']);
Route::get('contact', ['as'=>'contact', 'uses'=>'root@contact']);
Route::get('signup', ['as'=>'signup', 'uses'=>'root@signup']);
Route::post('ceklogin', ['as'=>'ceklogin', 'uses'=>'root@ceklogin']);
Route::post('storeemployee', ['as'=>'storeemployee', 'uses'=>'root@storeemployee']);

/*
| Routes ke employee
*/
Route::get('employeehome', ['as'=>'employeehome', 'uses'=>'employee@index']);
Route::get('profile', ['as'=>'profile', 'uses'=>'employee@profile']);
Route::get('education', ['as'=>'education', 'uses'=>'employee@education']);
Route::get('skill', ['as'=>'skill', 'uses'=>'employee@skill']);
Route::get('interview', ['as'=>'interview', 'uses'=>'employee@interview']);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
