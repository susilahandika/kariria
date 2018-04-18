<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Exception;
use App;

class Admin extends Controller
{
    public function index()
    {
    	return view('masteradmin');    	
    }

    public function findemployee()
    {
        return view('admin.findemployee');
    }
}
