@extends('layouts.master')

@section('content')

<h1>{{ $list->name }}</h1>

<p>
  Created on: {{$list->created_at}}
  Last modified: {{$list->updated_at}}
</p>

<p>
  {{$list->description}}
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
  <a href="{{ URL::route('lists.tasks.create', [$list->id]) }}" class='btn btn-primary'>Create a task</a>
</p>
@endif

{!! Form::open(array('route' => array('lists.destroy', $list->id), 'method' => 'DELETE')) !!}
  <button class="btn btn-danger" type="submit">
    Delete List
  </button>
{!! Form::close() !!}

@endsection