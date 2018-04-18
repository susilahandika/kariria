<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Exception;

class Employee extends Model
{
    protected $table = 'Employees';
    protected $primaryKey = 'email';
    protected $fillable = ['email', 'fullname', 'password', 'birthday', 'phone', 'gender', 'address', 'married'];
    public $timestamps = false;
}
