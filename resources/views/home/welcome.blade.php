@extends('layouts.master')
@section('content')
<h1>Welcome to TODOParrot</h1>
<p>Welcome to {{$name}} on {{$date}}</p>

<h6 id="list_count"></h6>
@endsection

@section('footer_js')
<script>
  $.ajax({
    url: "http://localhost:3000/lists/count",
    dataType: 'jsonp',
    crossDomain: true,
    success: function(data) {
      $('#list_count').html(data.count + " lists created!");
    },
    error: function(data) {
      $('#list_count').html('An Error ocurred please try later');
    }
  });
</script>
@endsection