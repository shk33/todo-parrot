<?php 

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use todoparrot\Todolist;

class TodolistTableSeeder extends Seeder
{
  
  function run()
  {
    Todolist::create([
      'name' => 'San Juan Vacation',
      'description' => 'Things to do before we leave for Puerto Rico!'
    ]);
    Todolist::create([
      'name' => 'Home Winterization',
      'description' => 'Winter is coming.'
    ]);
    Todolist::create([
      'name' => 'Rental Maintenance',
      'description' => 'Cleanup and improvements for new tenants'
    ]);
  }
}