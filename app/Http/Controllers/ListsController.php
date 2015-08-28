<?php

namespace todoparrot\Http\Controllers;

use Illuminate\Http\Request;

use todoparrot\Http\Requests;
use todoparrot\Http\Requests\ListFormRequest;
use todoparrot\Http\Controllers\Controller;
use todoparrot\Todolist;
use todoparrot\Category;

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
    $categories = Category::lists('name','id')->all();
    $selected_categories = null;
    return view('lists.create')
      ->with(compact('categories','selected_categories'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  ListFormRequest  $request
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

    $categories = $request->get('categories');
    if (count($categories) > 0) {
      $list->categories()->attach($categories);
    }

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
    $list->load('categories');
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
    $list = Todolist::findOrFail($id);
    $categories = Category::lists('name','id')->all();
    $selected_categories = $list->categories()->lists('id')->all();

    return view('lists.edit')
      ->with(compact('list','categories','selected_categories'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  ListFormRequest  $request
   * @param  int  $id
   * @return Response
   */
  public function update(ListFormRequest $request, $id)
  {
    $list = Todolist::find($id);

    $list->update([
      'name' => $request->get('name'),
      'description' => $request->get('description')
      ]);

    $categories = $request->get('categories');
    $list->categories()->sync($categories);

    return \Redirect::route('lists.edit', [$list->id])
      ->with('message','List has been updated.');
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

    return \Redirect::route('lists.index')
      ->with('message','The list has been deleted!');
  }
}
