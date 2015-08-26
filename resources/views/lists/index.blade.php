@extends('layouts.master')

@section('content')
<h1>Lists</h1>

@if ($lists->count() > 0)
<ul>
  @foreach ($lists as $list)
    <li>{{$list->name}}</li>
  @endforeach
  {!! $lists->render() !!}
</ul>
@else
  <p> No lists found</p>
@endif
@endsection