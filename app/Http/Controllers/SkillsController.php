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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userSkills  = \App\Skill::where('email', Auth::user()->email)->get()->toArray();
        // $years    = ['0 tahun','1 tahun','2 tahun','3 tahun','4 tahun','5 tahun','>5 tahun'];
        $skill_types = DB        ::table('skill_types')->pluck('skill_type', 'id');
        $scores      = DB        ::table('scores')->pluck('score', 'id');

        return view('employee.skill', [
            'skill_types' => $skill_types,
            'scores'      => $scores,
            'userSkills'   => $userSkills,
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
