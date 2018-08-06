<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
  protected $table = 'certificates';
  protected $fillable = ['email', 'certificate_name', 'certificate_date'];
}
