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

    public function index()
    {
        $skill_types = DB::table('skill_types')->pluck('skill_type', 'id');

        return view('admin.findcandidate', [
            'skill_types' => $skill_types,
        ]);
    }

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

    public function find(Request $request){
        // $skills = $request->input('skill');

        $candidates = \App\Candidate::findCandidate($request);

        return view('admin.candidate')->with('candidates', $candidates);
    }

    public function insertInterview(Request $request)
    {
        $dataInterview = $request->except('_token', 'oldurl');
        $email = $request->input('email');
        $oldurl = $request->input('oldurl');

        try {
            DB::beginTransaction();

            DB::table('interviews')->where('email', '=', $email)->delete();
            DB::table('interviews')->insert($dataInterview);

            DB::commit();

        } catch (\Exception $e) {
            // $request->session()->flash('error', "Error load data " . $e->getMessage());
            echo "Error load data " . $e->getMessage();
        }

        return redirect("candidates/find$oldurl");

    }
}
