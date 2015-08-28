@extends('layouts.master')

@section('content')
<h1>Lists</h1>

@include('app.messages')

@if ($lists->count() > 0)
<ul>
  @foreach ($lists as $list)
    <li>{{$list->name}}</li>
    @foreach ($list->comments as $comment)
      <p>
        <b>Comment: {{ $comment->body }}</b>
      </p>
    @endforeach
  @endforeach
  {!! $lists->render() !!}
</ul>
@else
  <p> No lists found</p>
@endif
@endsection