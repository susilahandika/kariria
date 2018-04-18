<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Employee extends Controller
{
    public function index()
    {
        return view('employee.index');
    }

    public function profile()
    {
    	return view('employee.profile');
    }

    public function education()
    {
    	return view('employee.education');
    }

    public function skill()
    {
    	return view('employee.skill');
    }
}
