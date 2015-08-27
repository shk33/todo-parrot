<?php

namespace todoparrot;

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Todolist extends Model implements SluggableInterface
{

  use SoftDeletes;
  use SluggableTrait;

  private $rules = [
    'name' => 'required',
    'description' => 'required'
  ];
  protected $fillable = ['name', 'description'];
  protected $dates = ['deleted_at'];
  protected $sluggable = [
        'build_from' => 'name',
        'save_to'    => 'slug',
  ];

  public function tasks()
  {
    return $this->hasMany('todoparrot\Task');
  }

  public function categories()
  {
    return $this->belongsToMany('todoparrot\Category')
      ->withTimestamps();
  }

  public function validate()
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