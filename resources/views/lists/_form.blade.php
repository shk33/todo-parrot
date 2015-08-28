<div class="form-group">
  {!! Form::label('List Name') !!}
  {!! Form::text('name', null,
    array(
      'required', 'class'=>'form-control',
      'placeholder'=>'San Juan Vacation'))!!}
</div>

<div class="form-group">
  {!! Form::label('List Description') !!}
  {!! Form::textarea('description', null,
    array(
    'required', 'class'=>'form-control',
    'placeholder'=>'Things to do before leaving for vacation'
    )) !!}
</div>

<div class="form-group">
  {!! Form::submit($submitText, array('class'=>'btn btn-primary')) !!}
</div>