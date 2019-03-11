<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name')}}<span>@yield('title')</span></title>

        <!-- Fonts -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        <link href="{{ mix('css/custom.css') }}" rel="stylesheet">
        @yield('stylesheet')
    </head>
    <body>
    @include('frontend.partials._header')

    <main role="main">
    @yield('content')
      
    </main>

   




      @include('frontend.partials._footer')



       <script src="{{ mix('js/all.js') }}"></script>
       @yield('script')
    </body>
</html>
