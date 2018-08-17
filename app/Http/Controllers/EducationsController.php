<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use exception;

class EducationsController extends Controller
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
        try {

            $levels = DB::table('levels')->pluck('level_name', 'level_name');
            $educations = \App\Education::where('email', Auth::user()->email)->get()->toArray();

            if (count($educations) > 0) {
                $educations[0]['from_date'] = (is_null($educations[0]['from_date']) ? \Carbon\Carbon::now() : $educations[0]['from_date']);
                $educations[0]['to_date'] = (is_null($educations[0]['to_date']) ? \Carbon\Carbon::now() : $educations[0]['to_date']);
            }

        } catch (Exception $e) {
            $request->session()->flash('error', "Error load data " . $e->getMessage());
        }

        return view('employee.education', [
            'educations' => $educations,
            'levels' => $levels
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

            $education = $request->except('_token', '_method');

            for ($i=0; $i<count($education['education_loc']); $i++) {
                $data_education = array(
                    'email'         => $education['email'],
                    'level'         => $education['level'][$i],
                    'education_loc' => $education['education_loc'][$i],
                    'major'         => $education['major'][$i],
                    'value'         => $education['value'][$i],
                    'from_date'     => $education['from_date'][$i],
                    'to_date'       => $education['to_date'][$i],
                );

                $data_educations[] = $data_education;
            }

            \App\Education::where('email', $education['email'])->delete();

            \App\Education::insert($data_educations);

            DB::commit();

            $request->session()->flash('success', 'Data berhasil diubah');

        } catch (Exception $e) {
            DB::rollBack();
            $request->session()->flash('error', "Error ubah data " . $e->getMessage());
        }

        return redirect()->route('educations.index');
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
        // $education = $request->except('_token', '_method');
        //
        // \App\Education::where('id', $request->input('id'))->update($education);
        //
        // $request->session()->flash('success', 'Data telah dirubah');
        // return redirect()->route('educations.index');
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function destroy(Request $request, $id)
    {

        \App\Education::destroy($id);

        $request->session()->flash('success', 'Data telah dihapus');
        return redirect()->route('educations.index');
    }

    public function findLevel(Request $request){
        $cari = $request->q;
        $levels = DB::table('levels')
                            ->select('id', 'level_name')
                            ->where("level_name", "like", "%$cari%")
                            ->get();

        return \Response::json($levels);
    }
}
