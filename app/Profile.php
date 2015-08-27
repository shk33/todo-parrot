<?php

namespace todoparrot;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
  public function user($value='')
  {
    $this->belongsTo('todoparrot\User');
  }
}
