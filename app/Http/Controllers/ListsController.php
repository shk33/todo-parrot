<?php

namespace todoparrot\Http\Controllers;

use Illuminate\Http\Request;

use todoparrot\Http\Requests;
use todoparrot\Http\Requests\ListFormRequest;
use todoparrot\Http\Controllers\Controller;
use todoparrot\Todolist;

class ListsController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    // $lists = Todolist::all();
    $lists = Todolist::orderBy('created_at','desc')
      ->with('comments')->paginate(10);
    return view('lists.index')->with(compact('lists'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return view('lists.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  Request  $request
   * @return Response
   */
  public function store(ListFormRequest $request)
  {
    $list = new Todolist(array(
      'name' => $request->get('name'),
      'description' => $request->get('description')
      )
    );

    $list->save();

    return \Redirect::route('lists.create')
      ->with('message','Your list has been created!');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    $list = Todolist::findOrFail($id);
    // $list = Todolist::findBySlug($id);
    return view('lists.show')->with(compact('list'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
      //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  Request  $request
   * @param  int  $id
   * @return Response
   */
  public function update(Request $request, $id)
  {
      //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    Todolist::destroy($id);
    return \Redirect::route('lists.index');
  }
}
