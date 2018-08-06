<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Exception;
use App;

class AdminController extends Controller
{
    public function __cosnstruct()
	{
		$this->middleware('auth');
	}
    
    public function index()
    {
    	return view('masteradmin');
    }

    public function findemployee()
    {
        return view('admin.findemployee');
    }
}
