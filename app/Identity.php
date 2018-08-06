<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Exception;

class Identity extends Model
{
    protected $table = 'identities';
    protected $primarykey = 'email';
    protected $fillable = ['name', 'telp', 'email', 'birthday', 'gender', 'married', 'address'];

    /*public function photo()
    {
    	return $this->hasOne('App\Photo', 'email');
    }*/
    
}
