<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
use exception;
use Auth;

class WeightsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $criteria = (\App\Criteria::all()->toArray()) ? \App\Criteria::all()->toArray() : 'sing ade';
        $weights =  \App\Weight::all()->toArray();

        $arrayWeights = $this->setArrayWeight($criteria, $weights);

        return view('admin.weight', [
            'criteria'      => $criteria,
            'arrayWeights' => $arrayWeights,
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        try {
            $this->validate($request, [
                'weight'    => 'required',
        	]);

            $weights = $request->input('weight');

            DB::beginTransaction();

            for ($i=1; $i<=count($weights); $i++) {
                for ($j=1; $j <= count($weights); $j++) {
                    $data_weight      = array(
                        'criteria1'  => $i,
                        'criteria2'  => $j,
                        'weight'     => $weights[$i][$j],
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'),
                    );
                    //
                    // $data_weights[] = $data_weight;

                    \App\Weight::updateWeight($data_weight);
                }
            }

            // \App\Weight::truncate();
            //
            // \App\Weight::insert($data_weights);

            DB::commit();

            $request->session()->flash('success', 'Data berhasil diubah');

        } catch (\Exception $e) {
            DB::rollBack();
            $request->session()->flash('error', 'Error ubah data ' . $e->getMessage());
        }

        return redirect()->route('weights.index');
    }

    public function setArrayWeight($criteria, $weights)
    {
        $x = 0;

        for ($i=1; $i <= count($criteria); $i++) {
            for ($j=1; $j <= count($criteria) ; $j++) {
                if ($j<$i) {
                    $data[$i][$j] = round(1/$data[$j][$i], 2);
                } elseif ($i==$j) {
                    $data[$i][$j] = 1;
                } else {
                    $data[$i][$j] = $weights[$x]['weight'];
                }
                $x++;
            }
        }

        return $data;
    }
}
