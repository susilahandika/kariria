<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reference extends Model
{
    protected $table = 'references';
    protected $fillable = ['email', 'salary', 'compensation', 'start_work', 'reason_resign'];

    
}
