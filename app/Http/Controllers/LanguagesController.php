<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use exception;
use Auth;

class LanguagesController extends Controller
{

	public function __cosnstruct()
	{
		$this->middleware('auth');
	}

	/**
	* Display a listing of the resource.
	*
	* @return \Illuminate\Http\Response
	*/
	public function index(Request $request)
	{
		try {
			$languages = \App\Language::where('email', Auth::user()->email)->get();
			$langs     = DB::table('lang')->pluck('name', 'iso');
			$scores    = DB::table('scores')->pluck('score', 'id');
        } catch (Exception $e) {
            $request->session()->flash('error', "Error load data " . $e->getMessage());
        }

		return view('employee.language', [
			'langs'     => $langs,
			'languages' => $languages,
			'scores'    => $scores,
		]);
	}

	/**
	* Show the form for creating a new resource.
	*
	* @return \Illuminate\Http\Response
	*/
	public function create()
	{
		//
	}

	/**
	* Store a newly created resource in storage.
	*
	* @param  \Illuminate\Http\Request  $request
	* @return \Illuminate\Http\Response
	*/
	public function store(Request $request)
	{
		try {
			DB::beginTransaction();

			$language = $request->except('_token', '_method');

			for ($i=0; $i<count($language['language']); $i++) {
				$data_language = array(
					'email'      => $language['email'],
					'language'   => $language['language'][$i],
					'score'      => $language['score'][$i],
					'created_at' => date('Y-m-d H:i:s'),
					'updated_at' => date('Y-m-d H:i:s'),
				);

				$data_languages[] = $data_language;
			}

			\App\Language::where('email', $email)->delete();

			\App\Language::insert($data_languages);

			DB::commit();

			$request->session()->flash('success', 'Data berhasil ditambah');
		} catch (Exception $e) {
			DB::rollBack();
			$request->session()->flash('error', "Error update data " . $e->getMessage());
		}

		return redirect()->route('languages.index')->withInput();
	}

	/**
	* Display the specified resource.
	*
	* @param  int  $id
	* @return \Illuminate\Http\Response
	*/
	public function show($id)
	{
		//
	}

	/**
	* Show the form for editing the specified resource.
	*
	* @param  int  $id
	* @return \Illuminate\Http\Response
	*/
	public function edit($id)
	{
		//
	}

	/**
	* Update the specified resource in storage.
	*
	* @param  \Illuminate\Http\Request  $request
	* @param  int  $id
	* @return \Illuminate\Http\Response
	*/
	public function update(Request $request, $id)
	{
		//
	}

	/**
	* Remove the specified resource from storage.
	*
	* @param  int  $id
	* @return \Illuminate\Http\Response
	*/
	public function destroy($id)
	{
		//
	}
}
