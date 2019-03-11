
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{config('app.name')}}</title>

    <!-- Bootstrap core CSS -->
    <link href="{{mix('css/app.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="d{{mix('css/custom.css')}}" rel="stylesheet">
  </head>

  <body>
    @include('backend.partials._nav')

    <div class="container-fluid">
      <div class="row">
      @include('backend.partials._sidebar')

        @yield('content')
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{mix('js/all.js')}}"></script>
    <script>
      feather.replace()
    </script>

    <!-- Graphs -->
  </body>
</html>
