<?php

namespace todoparrot\Http\Controllers;

use Illuminate\Http\Request;

use todoparrot\Http\Requests;
use todoparrot\Http\Controllers\Controller;

class WelcomeController extends Controller
{
  function index()
  {
    return view('home.welcome');
  }
}
