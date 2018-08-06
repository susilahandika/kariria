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

    public function index()
    {
        try {

            $levels = DB::table('levels')->pluck('level_name', 'level_name');

            $educations = \App\Education::where('email', Auth::user()->email)->get();

            return view('employee.education', [
                'educations' => $educations,
                'levels' => $levels
            ]);

        } catch (Exception $e) {
            echo ("Error load data " . $e->getMessage());
        }
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
            $education = $request->except('_token', '_method');

            \App\Education::create($education);

            $request->session()->flash('success', 'Data berhasil ditambah');
            return redirect()->route('educations.index');

        } catch (Exception $e) {
             echo ("Error update data " . $e->getMessage());
        }
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
        $education = $request->except('_token', '_method');

        \App\Education::where('id', $request->input('id'))->update($education);

        $request->session()->flash('success', 'Data telah dirubah');
        return redirect()->route('educations.index');
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
}
