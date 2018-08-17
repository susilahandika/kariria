<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use exception;
use Auth;

class CertificatesController extends Controller
{

  public function __cosnstruct()
  {
    $this->middleware('auth');
  }
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index(Request $request)
  {
    try {
      $certificates = \App\Certificate::where('email', Auth::user()->email)->get()->toArray();

      if(count($certificates) > 0){
          $certificates[0]['certificate_date'] = (is_null($certificates[0]['certificate_date']) ? \Carbon\Carbon::now() : $certificates[0]['certificate_date']);
      }

    } catch (Exception $e) {
      $request->session()->flash('error', "Error load data " . $e->getMessage());
    }

    // return view('employee.certificate', [
    // 	'certificates' => $certificates,
    // ]);
    return view('employee.certificate')->with('certificates', $certificates);
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

      $certificate = $request->except('_token', '_method');

      for ($i=0; $i<count($certificate['certificate_name']); $i++) {
        $data_certificate = array(
          'email'            => $certificate['email'],
          'certificate_name' => $certificate['certificate_name'][$i],
          'certificate_date' => $certificate['certificate_date'][$i],
        );

        $data_certificates[] = $data_certificate;
      }

      \App\Certificate::where('email', $email)->delete();

      \App\Certificate::insert($data_certificates);

      DB::commit();

      $request->session()->flash('success', 'Data berhasil diubah');
    } catch (Exception $e) {
      DB::rollBack();
      $request->session()->flash('error', "Error ubah data " . $e->getMessage());
    }

    return redirect()->route('certificates.index')->withInput();
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
