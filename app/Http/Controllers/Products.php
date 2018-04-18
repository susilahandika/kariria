<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;

use Illuminate\Http\Request;
use DB;
use Exception;
use App;

class Products extends Controller
{
    public function index()
    {
    	try {

    		$data = DB::table('products')->get();

    		return view('products.listproducts')->with('dataproducts', $data);

    	} catch (Exception $e) {
    		echo ("Error load data " . $e->getMessage());
    	}
    }

    public function add()
    {
    	return view('products.addproducts');
    }

    public function save(Request $request)
    {
    	try {

            $dataproducts = $request->except('_token');
    		DB::table('products')->insert($dataproducts);

    		return redirect('listproducts');
            
    	} catch (Exception $e) {
    		echo ("Error save data " . $e->getMessage());
    	}
    }

    public function edit($id)
    {
        try {

            $data = DB::table('products')->where('id', $id)->get();

            return view('products.editproducts')->with('x', $data);

        } catch (Exception $e) {
            echo ("Error load data " . $e->getMessage());
        }
    }

    public function update(Request $request)
    {
        try {
            $id = $request->input('id');
            $dataproducts = $request->except('_token');

            DB::table('products')->where('id', $id)->update($dataproducts);

            return redirect('listproducts');
        } catch (Exception $e) {
            echo ("Error ubah data " . $e->getMessage());
        }
    }

    public function delete($id, Request $request)
    {   
        try {
            DB::table('products')->where('id', $id)->delete();

            return redirect('listproducts');

        } catch (Exception $e) {
            echo ("Error hapus data " . $e->getMessage());
        }
    }
    
}
