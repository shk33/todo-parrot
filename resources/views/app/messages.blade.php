@if(Session::has('message'))
  <div class="alert alert-info">
    {{ Session::get('message') }}
  </div>
@endif

@if (count($errors) > 0)
<ul>
  <div class="alert alert-danger">
    @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
  </div>
</ul>
@endif