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

<h3>Categories</h3>

<div class="form-group">
  {!! Form::label('Categories') !!}
  {!! Form::select('categories', $categories, 
      $selected_categories,
      ['multiple' => 'multiple',
        'name'    => 'categories[]',
        'class'   =>  'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::submit($submitText, array('class'=>'btn btn-primary')) !!}
</div>