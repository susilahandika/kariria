<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
use exception;

class CandidatesController extends Controller
{
    public function __cosnstruct(){
        $this->middleware('auth');
	}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skill_types = DB::table('skill_types')->pluck('skill_type', 'id');

        return view('admin.findcandidate', [
            'skill_types' => $skill_types,
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $candidates = DB::table('show_candidate')->where('email', '=', $id)->get();
        $educations = DB::table('educations')->where('email', '=', $id)->get();
        $experiences = DB::table('experiences')->where('email', '=', $id)->get();
        $skills = DB::table('skill_candidate')->where('email', '=', $id)->get();
        $languages = DB::table('lang_candidate')->where('email', '=', $id)->get();

        return view('admin.detailcandidate', [
			'candidates'  => $candidates,
			'educations'  => $educations,
			'experiences' => $experiences,
			'skills'      => $skills,
			'languages'   => $languages,
		]);

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

    public function find(Request $request){
        // $skills = $request->input('skill');

        $candidates = \App\Candidate::findCandidate($request);

        return view('admin.candidate')->with('candidates', $candidates);
    }
}
