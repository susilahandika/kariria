<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use DB;
use exception;

class Weight extends Model
{
    protected $table = 'weights';
    protected $fillable = ['criteria1', 'criteria2', 'weight'];

    public static function updateWeight($weight)
    {
        return DB::table('weights')
                    ->where('criteria1', '=', $weight['criteria1'])
                    ->where('criteria2', '=', $weight['criteria2'])
                    ->update(['weight' => $weight['weight']]);
    }
}
