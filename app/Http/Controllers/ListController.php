<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListController extends Controller
{
    public function find(Request $request)
    {

    	$response = array(
					'status' => 'success',
					'msg'    => 'Setting created successfully ' . $request->input('id'),
    	        );

    	return \Response::json($response);
    }
}
