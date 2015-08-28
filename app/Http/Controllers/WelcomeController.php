<?php

namespace todoparrot\Http\Controllers;

use Illuminate\Http\Request;

use todoparrot\Http\Requests;
use todoparrot\Http\Controllers\Controller;

class WelcomeController extends Controller
{
  function __construct() {
    $this->middleware('iplogger');
  }

  function index()
  {
    $data = array('name' => 'Yucatan',
                  'date' => date('Y-m-d') );
    return view('home.welcome')->with($data);
  }
}
