<?php

namespace todoparrot;

use Illuminate\Database\Eloquent\Model;

class Todolist extends Model
{
  private $rules = [
    'name' => 'required',
    'description' => 'required'
  ];

  protected $fillable = ['name', 'description'];

  function validate()
  {
    $v = \Validator::make($this->attributes, $this->rules);
    if ($v->passes()) return true;
    $this->errors = $v->messages();
    return false;
  }
  // public function setPasswordAttribute($password)
  // {
  //   $this->attributes['password'] = \Hash::make($password);
  // }
}
