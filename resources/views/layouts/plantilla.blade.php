<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <title>@yield('title')</title>
<link href="{{asset('css/style.css') }}" rel="stylesheet">
  </head>
  <body >

  @yield('content')
  <script src="{{asset('js/app.js')}}"></script>
  </body>
</html>
