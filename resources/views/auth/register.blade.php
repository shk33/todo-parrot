@extends('layouts.master')

@section('content')
<div class="col-md-6">
{!! Form::open(array('url' => '/auth/register', 'class' => 'form')) !!}
  <h1>Create a TODOParrot Account</h1>

  @include('app.messages')

  <div class="form-group">
  {!! Form::label('name', 'Your Name') !!}
  {!! Form::text('name', null, array('class'=>'form-control', 'placeholder'=>'Name')) !!}
  </div>

  <div class="form-group">
  {!! Form::label('Your E-mail Address') !!}
  {!! Form::text('email', null,
      array('class'=>'form-control', 'placeholder'=>'Email Address')) !!}
  </div>

  <div class="form-group">
    {!! Form::label('Your Password') !!}
    {!! Form::password('password',
        array('class'=>'form-control', 'placeholder'=>'Password')) !!}
  </div>

  <div class="form-group">
    {!! Form::label('Confirm Password') !!}
    {!! Form::password('password_confirmation',
        array('class'=>'form-control', 'placeholder'=>'Confirm Password')) !!}
  </div>

  <div class="form-group">
    {!! Form::submit('Create My Account!',
        array('class'=>'btn btn-primary')) !!}
  </div>

{!! Form::close() !!}
</div>
@endsection