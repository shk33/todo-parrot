@extends('layouts.master')

@section('content')

<h1>{{ $list->name }}</h1>

<p>
  Created on: {{$list->created_at}}
  Last modified: {{$list->updated_at}}
</p>

<p>
  <h3>Description</h3>
  {{$list->description}}
</p>

<p>
  <h3>Categories</h3>
  @if ($list->categories->count() > 0)
    <ul>
      @foreach ($list->categories as $category)
        <li>{{ $category->name }}</li>
      @endforeach
    </ul>
  @else
  <p>
    This list has no categories
  </p>
  @endif
</p>

@if ($list->tasks->count() > 0)
  <ul>
    @foreach ($list->tasks as $task)
      <li>{{ $task->name }}</li>
    @endforeach
  </ul>
@else
<p>
  You haven't created any tasks.
  <a href="#" class='btn btn-primary'>Create a task</a>
</p>
@endif

{!! Form::open(array('route' => array('lists.destroy', $list->id), 'method' => 'DELETE')) !!}
  <button class="btn btn-danger" type="submit">
    Delete List
  </button>
{!! Form::close() !!}

@endsection