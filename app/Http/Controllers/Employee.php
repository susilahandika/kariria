<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use exception;

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
        try {

            $levels = DB::table('levels')->pluck('level_name', 'id');

        	return view('employee.education')->with('levels', $levels);

            /*$educations = DB::table('educations')
                            ->join('edu_locations', 'edu_locations.id', '=', 'educations.education_loc_id')
                            ->join('levels', 'levels.id', '=', 'educations.level_id')
                            ->select('levels.level_name', 'edu_locations.name', 'educations.value')
                            ->where('educations.email', 'susilaandika@gmail.com')->get();

            return view('employee.education', [
                'educations' => $educations,
                'levels' => $levels
            ]);*/

        } catch (Exception $e) {
            echo ("Error load data " . $e->getMessage());
        }
    }

    public function skill()
    {
        $years = ['0 tahun','1 tahun','2 tahun','3 tahun','4 tahun','5 tahun','>5 tahun'];
    	return view('employee.skill', ['years' => $years]);
    }
}
