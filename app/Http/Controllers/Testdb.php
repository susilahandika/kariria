<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use Exception;

class Testdb extends Controller
{
    public function testdb(){
    	// $data['product'] = DB::table('products')->get()->toArray();
    	$data = DB::table('products')->get()->toArray();
    	
    	return view('test')->with($data);    	
    }
}
