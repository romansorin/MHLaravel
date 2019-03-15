@extends('layouts/app')
@section('title', 'Home')
@section('stylesheets')
    <link rel="stylesheet" href="{{ asset('css/glider.min.css') }}">
@endsection
@section('content')

    <section class="page-wrap container">
        <div class="col-12">
            <div class="row">
                <div class="col-10">
                    <h1 class="page-heading">News.</h1>
                    <p class="page-subheading">The latest news and announcements from Mentor.</p>
                </div>
                <div class="col-2">
                    <button class="btn btn-light page-subheading-extend">View latest</button>
                </div>
            </div>
        </div>
    </section>

    <section class="main-content-wrap container">
        <div class="row" id="news-cards-wrapper">
            <div class="col-6 d-none d-lg-block">
                <div class="row">
                    <card-horizontal></card-horizontal>
                </div>
                <div class="row">
                    <card-vertical></card-vertical>
                    <card-vertical></card-vertical>
                </div>
            </div>
            <div class="col-6 d-none d-lg-block">
                <div class="row">
                    <card-vertical></card-vertical>
                    <card-vertical></card-vertical>
                </div>
                <div class="row">
                    <card-horizontal></card-horizontal>
                </div>
            </div>
            <div class="col-12 d-lg-none">
                <div class="row">
                    <div class="glider-contain">
                        <div class="glider" id="news-glider">
                            <div class="glider-track">
                                <card-horizontal></card-horizontal>
                                <card-vertical></card-vertical>
                                <card-vertical></card-vertical>
                                <card-vertical></card-vertical>
                                <card-vertical></card-vertical>
                                <card-horizontal></card-horizontal>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="page-wrap container">
        <div>
            <h1 class="page-heading">Events.</h1>
            <p class="page-subheading">See what's happening in and around Mentor.</p>
        </div>
    </section>

    <section class="main-content-wrap container">
        <div class="row" id="calendar-cards-wrapper">
            <div class="col-12">
                <div class="row">
                    <div class="col-lg-4">
                        <card-calendar></card-calendar>   
                    </div>    
                    <div class="col-lg-4">
                        <card-calendar></card-calendar>   
                    </div>
                    <div class="col-lg-4">
                        <card-calendar></card-calendar>       
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="{{ asset('js/glider.min.js') }}"></script>
    <script>
        new Glider(document.querySelector('#news-glider'), {
            slidesToShow: 'auto',
            slidesToScroll: 'auto',
            addTrack: false,
            duration: 2,
            draggable: true
        });
    </script>
@endsection
