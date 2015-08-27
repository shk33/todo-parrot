<?php

namespace todoparrot;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  protected $fillable = ['name'];

  public function todolists($value='')
  {
    return $this->belongsToMany('todoparrot\Todolist')
      ->withTimestamps();;
  }

}