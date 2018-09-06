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

}
