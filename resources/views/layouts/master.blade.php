<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>One Page Wonder - Start Bootstrap Template</title>

    @include('layouts.header')
  </head>

  <body>
  @include('layouts.navbar')
  @yield('content')


   @include('layouts.footer')
  </body>

</html>
