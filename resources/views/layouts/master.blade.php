<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
      @include('partials.styles')

    <title>Hello, world!</title>
  </head>
  <body>
  @include('partials.nav')
<div class="container">
<div class="row">

@yield('content')




</div>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      @include('partials.scripts')
  </body>
</html>
