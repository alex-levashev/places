<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>My favourite places - @yield('title')</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


    </head>
    <body>
      <div class="page-header"><h1 class='text-center'>@yield('title')<h1></div>
      <div class="content">
        <div class="row">
          <div class="col-sm-1"></div>
          <div class="col-sm-10">@yield('content')</div>
          <div class="col-sm-1"></div>
        </div>
      </div>
    </body>
</html>
