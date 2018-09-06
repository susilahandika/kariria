<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use exception;
use Auth;

class SkillsController extends Controller
{

    public function __cosnstruct(){
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        try {
            $userSkills  = \App\Skill::where('email', Auth::user()->email)->get()->toArray();
            // $years    = ['0 tahun','1 tahun','2 tahun','3 tahun','4 tahun','5 tahun','>5 tahun'];
            $skill_types = DB::table('skill_types')->pluck('skill_type', 'id');
            $scores      = DB::table('scores')->pluck('score', 'id');

        } catch (Exception $e) {
            $request->session()->flash('error', "Error load data " . $e->getMessage());
        }

        return view('employee.skill', [
            'skill_types' => $skill_types,
            'scores'      => $scores,
            'userSkills'   => $userSkills,
        ]);
    }

    public function store(Request $request)
    {

        try {
            DB::beginTransaction();

            // $skills = $request->except('_token', '_method');
            $email = $request->input('email');
            $skills = $request->input('skill');
            $scores = $request->input('score');
            $data_skills = array();

            for ($i=0; $i<count($skills); $i++) {
                $data_skill      = array(
                    'email'      => $email,
                    'skill'      => $skills[$i],
                    'score'       => $scores[$i],
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                );

                $data_skills[] = $data_skill;
            }

            \App\Skill::where('email', $email)->delete();

            \App\Skill::insert($data_skills);

            DB::commit();

            $request->session()->flash('success', 'Data berhasil diubah');

        } catch (Exception $e) {
            DB::rollBack();
            $request->session()->flash('error', 'Error ubah data ' . $e->getMessage());
        }

        return redirect()->route('skills.index');
    }

    public function findSkillTypes(Request $request){
        $cari = $request->q;
        $skill_types = DB::table('skill_types')
                            ->select('id', 'skill_type')
                            ->where("skill_type", "like", "%$cari%")
                            ->get();

        return \Response::json($skill_types);
    }
}
