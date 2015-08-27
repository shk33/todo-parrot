<?php 

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use todoparrot\Todolist;

class TodolistTest extends TestCase
{
  use DatabaseMigrations;

  public function testCanInstantiateTodolist()
  {
    $list = new Todolist;
    $this->assertEquals(get_class($list), 'todoparrot\Todolist');
  }
}