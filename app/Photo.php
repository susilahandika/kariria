<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $table = 'photos';
    protected $fillable = ['email', 'photo'];

    /*public function identity()
    {
    	return $this->belongsTo('App\Identity');
    }*/
}
