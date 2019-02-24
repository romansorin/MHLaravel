<?php
use Carbon\Carbon;
$date = Carbon::now()->format('l\, F dS');
?>
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
