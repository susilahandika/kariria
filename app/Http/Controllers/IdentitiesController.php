<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use exception;

class IdentitiesController extends Controller
{

	public function __cosnstruct(){
        $this->middleware('auth');
	}

    public function index()
    {
        try{
            // $identity = \App\Identity::where('email', Auth::user()->email)->get()->toArray();

            $identity = \App\Identity::find(1)
                        ->join('photos', 'identities.email', '=', 'photos.email')
                        ->select('identities.*', 'photos.photo')
                        ->where('identities.email', '=', Auth::user()->email)
                        ->get()->toArray();

            $identity[0]['birthday'] = (is_null($identity[0]['birthday']) ? \Carbon\Carbon::now() : $identity[0]['birthday']);

            return view('employee.profile')->with('identity', $identity);
        }
        catch (Exception $e) {
            echo ("Error load data " . $e->getMessage());
        }

    }

    public function create()
    {

    }

    public function store(Request $request)
    {

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'    => 'required',
            'telp'    => 'required',
            'email'   => 'required',
            'gender'  => 'required',
            'married' => 'required',
            'address' => 'required',
            // 'photo'   => 'image|mimes:jpg,png,jpeg|max:256',
    	]);

        $identity = $request->except('_token', '_method', 'photo');

        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $email = $request->input('email');

            $filename = hash('md5', $email) . "." . $photo->getClientOriginalExtension();
            $path = public_path() . '/images/userPhoto';

            $photo->move($path, $filename);

            $userPhoto['photo'] = $filename;

            \App\Photo::where('email', $id)->update($userPhoto);
        }

        \App\Identity::where('email', $id)->update($identity);

        $request->session()->flash('success', 'Data telah dirubah');

        return redirect()->route('identities.index');

    }

    public function destroy($id)
    {
        //
    }
}
