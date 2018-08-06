<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Exception;

class Education extends Model
{
    protected $table = 'educations';
    protected $fillable = ['email', 'level', 'education_loc', 'major', 'value', 'from_date', 'to_date'];
}
