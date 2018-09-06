<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cprofile extends Model
{
    protected $table = 'companies';
    protected $fillable = ['email', 'name', 'address', 'telp'];
}
