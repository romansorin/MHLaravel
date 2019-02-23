<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Laravel App')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- TODO: need icons for search, menu, etc. that i like -->
    @yield('stylesheets')
    <script src="{{ asset('js/app.js') }}"></script>
</head>

<body>
@include('layouts.header')
@yield('content')
<section class="container">
    <div>
        <h1>News</h1>
        <p>The latest news and announcements from Mentor</p>
    </div>
</section>
<section class="container">
    <div class="row">
        <div class="col-6">
            <div class="row">
                <div class="col-12">
                    <article class="card-horizontal" id="one"></article>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <article class="card-vertical" id="two"></article>
                </div>
                <div class="col-6">
                    <article class="card-vertical" id="three"></article>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="row">
                <div class="col-6">
                    <article class="card-vertical" id="four"></article>
                </div>
                <div class="col-6">
                    <article class="card-vertical" id="five"></article>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <article class="card-horizontal" id="six"></article>
                </div>
            </div>
        </div>
    </div>
</section>
@include('layouts.footer')
</body>

</html>