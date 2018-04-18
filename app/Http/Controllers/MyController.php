<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class MyController extends Controller
{
    public function home(){
    	return view('biodata');
    }

    public function hasil(){
    	$username = Input::get('nama');
		$password = Input::get('password');
		$alamat = Input::get('alamat');
		$kabupaten = Input::get('kabupaten');

		echo "Nama : " . $username . "<br>";
		echo "Password : " . $password . "<br>";
		echo "Alamat : " . $alamat . "<br>";
		echo "Kabupaten : " . $kabupaten . "<br>";
    }
}

