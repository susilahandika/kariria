<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use exception;

class File extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	try{
    	    $userPhoto = \App\Photo::where('email', Auth::user()->email)->get()->toArray();
    	    
    	    // return view('employee.profile')->with('identity', $identity);
    	    return view('employee.file')->with('userPhoto', $userPhoto);   
    	}
    	catch (Exception $e) {
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
    	$this->validate($request, [
            'file' => 'image|mimes:jpg,png,jpeg|max:256',
        ]);

        if ($request->hasFile('file')) {
        	$file = $request->file('file');
        	$email = $request->input('email');

        	$filename = hash('md5', $email) . "." . $file->getClientOriginalExtension();
        	$path = public_path() . '/images/userPhoto';

        	// $file->move($path, $filename);
        	return back()
        			->with('success', 'images Has been You uploaded successfully.')
        			->with('filename', $filename);
        }

        return back();
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
        	$this->validate($request, [
                'photo' => 'image|mimes:jpg,png,jpeg|max:256',
            ]);

            if ($request->hasFile('photo')) {
            	$file = $request->file('photo');
            	$email = $request->input('email');

            	$filename = hash('md5', $email) . "." . $file->getClientOriginalExtension();
            	$path = public_path() . '/images/userPhoto';

            	$file->move($path, $filename);
            	$userPhoto = $request->except('_token', '_method');

            	$userPhoto['photo'] = $filename;

            	// print_r($userPhoto);

    	    	\App\Photo::where('email', $id)->update($userPhoto);

    	        $request->session()->flash('success', 'Data telah dirubah');
    	        return redirect()->route('file.index');
            }

            return back();
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
