<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;

use Illuminate\Http\Request;
use DB;
use Exception;
use App;

class Root extends Controller
{
    public function index()
    {
    	return view('root.home');
    }

    public function login()
    {
    	return view('root.login');
    }

    public function ceklogin(Request $request)
    {
        $datalogin = $request->except('_token');

        $this->validate($request, [
            'email'    => 'required|email',
            'password' => 'required'
        ], [
            'email.required'    => 'Email masih kosong',
            'email.email'       => 'Format email salah',
            'password.required' => 'Password masih kosong'
        ]);

        $data = App\Employee::where('email', $datalogin['email'])
                                ->where('password', $datalogin['password'])
                                ->get()->count();

        if($data > 0){
            return redirect()->route('profile');
        }else{
            return redirect('login')->withErrors('Username dan password salah')->withInput(Input::except('password'));
        }

        /*if($datalogin['email'] == 'susilaandika@gmail.com' AND $datalogin['password'] == 'rahasia'){
            return redirect()->route('profile');
        } else{
            return redirect('login')->withErrors('Username dan password salah')->withInput(Input::except('password'));
        }*/
    }

    public function about()
    {
    	return view('root.about');
    }

    public function contact()
    {
    	return view('root.contact');
    }

    public function signup()
    {
        return view('root.signup');
    }

    public function storeemployee(Request $request)
    {
        $datasignup = $request->except('_token');

        $this->validate($request, [
            'fullname' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'password2' => 'required|same:password'
        ], [
            'fullname.required' => 'Nama lengkap masih kosong',
            'email.required' => 'Email masih kosong',
            'email.email' => 'Format email tidak sesuai',
            'password.required' => 'Password masih kosong',
            'password.min' => 'Password minimal 6 karakter',
            'password2.required' => 'Konfirmasi password masih kosong',
            'password2.same' => 'Konfirmasi password tidak sama dengan password'
        ]);

        try {
            App\Employee::create($datasignup);
        } catch (Exception $e) {
            $errorCode = $e->errorInfo[1];
            if($errorCode == 1062){
                return redirect('signup')->withErrors('Email yang anda masukkan sudah terdaftar')->withInput();
            }else{
                return redirect('signup')->withErrors($e->getMessage())->withInput();
            }
        }
    }
}
