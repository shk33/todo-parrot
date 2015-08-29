@extends('layouts.master')

@section('content')
<div class="col-md-6">

{!! Form::open(array('url' => '/password/email', 'class' => 'form')) !!}
  <h1>Recover Your Password</h1>

  @include('app.messages')

  <div class="form-group">
    {!! Form::label('email', 'Your E-mail Address') !!}
    {!! Form::text('email', null,
        array('class'=>'form-control', 
              'placeholder'=>'E-mail')) !!}
  </div>

  <div class="form-group">
    {!! Form::submit('Reset my password',
        array('class'=>'btn btn-primary')) !!}
  </div>

  {!! Form::close() !!}

</div>
@endsection