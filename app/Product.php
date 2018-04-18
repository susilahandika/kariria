<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Exception;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['id', 'name', 'description', 'price', 'stock'];
    public $timestamps = false;

    
}
