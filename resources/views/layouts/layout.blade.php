<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="{{ URL::asset('public/css/main.css') }}">

</head>
<body>
    
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Owls</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
       
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../navbar/">Home</a></li>
            <li><a href="{{ route('logout')}}">Logout</a></li>
            <li><a href="../navbar-fixed-top/">Fixed top</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>



    <div class="container">
         @yield('content')
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://getbootstrap.com/dist/js/bootstrap.min.js"></script>
    
    <script type="text/javascript" src="{{ URL::asset('public/js/app.js') }}"></script>
</body>
</html>