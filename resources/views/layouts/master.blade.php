<!DOCTYPE html>
<html>
<head>
  <title>Welcome to TODOParrot</title>
  <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-offset-1 col-lg-10">
          @yield('content')
        </div>
      </div>
    </div>

    <div>
      @yield('footer_js')
    </div>
    
  </body>
</html>