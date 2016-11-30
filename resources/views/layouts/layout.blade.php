<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="{{ URL::asset('public/css/main.css') }}">

</head>
<body>
    <div class="container">
         @yield('content')
    </div>
</body>
</html>