<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use exception;

class ReferencesController extends Controller
{

    public function __cosnstruct(){
        $this->middleware('auth');
    }

    public function index()
    {
        try{
            $reference = \App\Reference::where('email', Auth::user()->email)->get()->toArray();

            return view('employee.reference')->with('reference', $reference);
        }
        catch (Exception $e) {
            echo ("Error load data " . $e->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        $reference = $request->except('_token', '_method');

        \App\Reference::where('email', $id)->update($reference);

        $request->session()->flash('success', 'Data telah dirubah');
        return redirect()->route('references.index');
    }

}
