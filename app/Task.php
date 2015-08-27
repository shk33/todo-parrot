<?php

namespace todoparrot;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
  public function Todolist()
  {
    return $this->belongsTo('todoparrot\Todolist');
  }
}
