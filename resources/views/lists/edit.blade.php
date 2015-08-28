@extends('layouts.master')

@section('content')
<h1>Create a new List</h1>

@include('app.messages')

{!! Form::model($list, 
    array('route'  => ['lists.update', $list->id], 
          'class'  => 'form',
          'method' => 'PUT' )) !!}

  @include('lists._form', array('submitText' => 'Update List'))

{!! Form::close() !!}
@stop