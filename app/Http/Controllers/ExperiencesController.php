<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use exception;
use Auth;

class ExperiencesController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function __cosnstruct(){
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $positions = array(
            'staff'            => 'Staff',
            'officer'          => 'Officer',
            'supervisor'       => 'Supervisor',
            'assitant manager' => 'Assistant Manager',
            'junior manager'   => 'Junior Manager',
            'senior manager'   => 'Senior Manager',
            'branch manager'   => 'Branch Manager',
        );

        try {
            $experiences = \App\Experience::where('email', Auth::user()->email)->get()->toArray();

            if (count($experiences) > 0) {
                echo "test";
                $experiences[0]['from_date'] = (is_null($experiences[0]['from_date']) ? \Carbon\Carbon::now() : $experiences[0]['from_date']);
                $experiences[0]['to_date'] = (is_null($experiences[0]['to_date']) ? \Carbon\Carbon::now() : $experiences[0]['to_date']);
            }

        } catch (Exception $e) {
            $request->session()->flash('error', "Error load data " . $e->getMessage());
        }

        return view('employee.experience', [
            'experiences' => $experiences,
            'positions'  => $positions,
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

            $email         = $request->input('email');
            $company       = $request->input('company');
            $scope         = $request->input('scope');
            $position      = $request->input('position');
            $from_date     = $request->input('from_date');
            $to_date       = $request->input('to_date');
            $jobdesc       = $request->input('jobdesc');
            $reason_resign = $request->input('reason_resign');

            for ($i=0; $i<count($position); $i++) {
                $data_experience = array(
                    'email'         => $email,
                    'company'       => $company[$i],
                    'scope'         => $scope[$i],
                    'position'      => $position[$i],
                    'from_date'     => $from_date[$i],
                    'to_date'       => $to_date[$i],
                    'jobdesc'       => $jobdesc[$i],
                    'reason_resign' => $reason_resign[$i],
                );

                $data_experiences[] = $data_experience;
            }

            \App\Experience::where('email', $email)->delete();

            \App\Experience::insert($data_experiences);

            DB::commit();

            $request->session()->flash('success', 'Data berhasil diubah');
        } catch (Exception $e) {
            DB::rollBack();
            $request->session()->flash('error', "Error ubah data " . $e->getMessage());
        }

        return redirect()->route('experiences.index')->withInput();

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
