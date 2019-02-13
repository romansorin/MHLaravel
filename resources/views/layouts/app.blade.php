<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title', 'Laravel App')</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <!-- TODO: need icons for search, menu, etc. that i like -->
        @yield('stylesheets')
        <script src="{{ asset('js/app.js') }}"></script>
    </head>

    <body>
        @include('layouts.header')
       	@yield('content')
        @include('layouts.footer')
    </body>

</html>