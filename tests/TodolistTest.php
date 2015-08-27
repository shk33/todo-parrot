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

  public function testNoValidWhenNameMissing()
  {
    $list = new Todolist;
    $this->assertFalse($list->validate());
  }

  public function testTodolistRecordCount()
  {
    $listFactory = factory('todoparrot\Todolist')->create();
    $lists = Todolist::all();
    $this->assertEquals($lists->count(),1);
  }
}