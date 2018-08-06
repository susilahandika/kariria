<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
  protected $table = 'experiences';
  protected $fillable = ['email', 'company', 'scope', 'position', 'from_date', 'to_date'];
}
