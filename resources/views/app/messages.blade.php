@if(Session::has('message'))
  <div class="alert alert-info">
    {{ Session::get('message') }}
  </div>
@endif

<ul>
  <div class="alert aler-danger">
    @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
  </div>
</ul>