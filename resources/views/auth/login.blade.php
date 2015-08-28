@extends('layouts.master')

@section('content')

<div class="col-md-6">
{!! Form::open(array('url' => '/auth/login', 'class' => 'form')) !!}
  <h1>Sign In to Your TODOParrot Account</h1>
  @include('app.messages')

  <div class="form-group">
    {!! Form::label('email', 'Your E-mail Address') !!}
    {!! Form::text('email', null,
        array('class'=>'form-control', 'placeholder'=>'E-mail')) !!}
  </div>

  <div class="form-group">
    {!! Form::label('Your Password') !!}
    {!! Form::password('password',
        array('class'=>'form-control', 'placeholder'=>'Password')) !!}
  </div>

  <div class="form-group">
    <label>
      {!! Form::checkbox('remember', 'remember') !!} Remember Me
    </label>
  </div>

  <div class="form-group">
    {!! Form::submit('Login', array('class'=>'btn btn-primary')) !!}
  </div>

  {!! Form::close() !!}
</div>

@endsection