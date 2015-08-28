@extends('layouts.master')

@section('content')
<h1>Create a new List</h1>

@include('app.messages')

{!! Form::open(array('route' => 'lists.store', 'class' => 'form', )) !!}

 @include('lists._form', array('submitText' => 'Create new List'))


{!! Form::close() !!}
@stop