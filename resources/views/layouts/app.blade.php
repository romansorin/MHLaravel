<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Mentor High School')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- TODO: need icons for search, menu, etc. that i like -->
    @yield('stylesheets')
</head>

<body>
@include('layouts.header')
<div id="app">
@yield('content')
</div>
@include('layouts.footer')
<script src="{{ asset('js/app.js') }}"></script>
@yield('scripts')
</body>

</html>
