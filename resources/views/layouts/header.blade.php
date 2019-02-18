<!-- TODO: make sure this is "accessible" for screen readers and such -->
<?php
use Carbon\Carbon;
$date = Carbon::now()->format('l\, F dS');
?>

<div class="nav-wrapper">
    <nav id="menu">
        <div class="nav flex-column" id="menu-box">
            <a class="nav-link" href="/academics">
                Academics
            </a>
            <a class="nav-link" href="/campus">
                Campus Life
            </a>
            <a class="nav-link" href="/the-arts">
                The Arts
            </a>
            <a class="nav-link" href="/resources">
                Resources
            </a>
            <a class="nav-link" href="/about">
                About
            </a>
        </div>
    </nav>
    <!--<div class="menu-footer container">
        <div class="flex-row justify-content-start" id="menu-footer-row">
            <a>Some</a>
            <a>Filler</a>
            <a>Text</a>
            <a>Footer</a>
        </div>
    </div>-->
</div>
<div id="search-wrapper">
    <div class="close-search">
        <button class="btn">
            <img alt="Close search container icon" class="close-search-svg" src="{{ asset('svg/close-icon.svg') }}"/>
        </button>
    </div>
    <div class="container search-container">
        <div class="row">
            <div class="col-lg-12">
                <p class="search-date-label">
                    <?=$date?>
                </p>
                <form action="#" id="search-form" role="search">
                    <input autocomplete="off" class="search-input" name="search" placeholder="Type to search" type="text">
            </form>
        </div>
    </div>
</div>
<div class="container search-results-container">
    <div class="row">
        <div class="col-lg-12 error-search-container">
            <p class="error-search">
                Nothing found. Try using different keywords. <!-- TODO: develop search feature -->
            </p>
        </div>
    </div>
</div>
</div>
<div class="base">
    <nav class="navbar justify-content-center header">
        <div class="container-fluid">
            <button class="hamburger hamburger--collapse header-btn mr-auto" id="menu-toggle" type="button">
                <span class="hamburger-box">
                    <span class="hamburger-inner">
                    </span>
                </span>
            </button>
            <a class="navbar-brand" href="/" id="header-brand">
                <img alt="Site header logo" src="{{ asset('svg/mentor-logo.svg') }}"/>
            </a>
            <button class="btn ml-auto header-btn open-search" type="button">
                <img alt="Search icon" src="{{ asset('svg/search-icon.svg') }}"/>
            </button>
        </div>
    </nav>
</div>

<script src="{{ asset('js/header.js') }}"></script>
