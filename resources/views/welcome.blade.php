@extends('layouts.app')
@section('title', 'Home')
@section('stylesheets')
    <link rel="stylesheet" href="{{ asset('css/glider.min.css') }}">
@endsection
@section('content')
@php

// TODO: News posts should be scheduled to go out on a certain date, and private otherwise. The "publish on" field should be used for displaying news on a future date
$news = App\NewsPost::orderBy('id', 'desc')->take(6)->get();
// TODO: Events query based on: today's date -> future dates (don't show previous events) 
$events = App\EventPost::orderBy('event_date', 'asc')->whereDate('event_date', '>=', Carbon\Carbon::today())->take(3)->get();

@endphp
    <section class="page-wrap container">
        <div class="col-12">
            <div class="row">
                <div class="col-10">
                    <h1 class="page-heading">News.</h1>
                    <p class="page-subheading">The latest news and announcements from Mentor.</p>
                </div>
                {{-- TODO: View latest, goes to news --}}
                {{-- <div class="col-2">
                    <h3 class="page-subheading-extend"><a href="/news">View latest></a></h3>
                </div> --}}
            </div>
        </div>
    </section>

    <section class="main-content-wrap container">
        <div class="row" id="news-cards-wrapper">
            <div class="col-6 d-none d-lg-block">
                <div class="row">
                    <card-horizontal :data="{{ $news[0] }}"></card-horizontal>
                </div>
                <div class="row">
                    <card-vertical :data="{{ $news[1] }}"></card-vertical>
                    <card-vertical :data="{{ $news[2] }}"></card-vertical>
                </div>
            </div>
            <div class="col-6 d-none d-lg-block">
                <div class="row">
                    <card-vertical :data="{{ $news[3] }}"></card-vertical>
                    <card-vertical :data="{{ $news[4] }}"></card-vertical>
                </div>
                <div class="row">
                    <card-horizontal :data="{{ $news[5] }}"></card-horizontal>
                </div>
            </div>
            <div class="col-12 d-lg-none">
                <div class="row">
                    <div class="glider-contain">
                        <div class="glider" id="news-glider">
                            <div class="glider-track">
                                <card-horizontal :data="{{ $news[0] }}"></card-horizontal>
                                <card-vertical :data="{{ $news[1] }}"></card-vertical>
                                <card-vertical :data="{{ $news[2]}}"></card-vertical>
                                <card-vertical :data="{{ $news[3] }}"></card-vertical>
                                <card-vertical :data="{{ $news[4] }}"></card-vertical>
                                <card-horizontal :data="{{ $news[5] }}"></card-horizontal>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="page-wrap container">
         <div class="col-12">
            <div class="row">
                <div class="col-10">
                <h1 class="page-heading">Events.</h1>
                <p class="page-subheading">See what's happening in and around Mentor.</p>
                 </div>
                {{-- <div class="col-2">
                    <h3 class="page-subheading-extend"><a href="/events">View all</a>
                    </h3>
                </div> --}}
            </div>
        </div>
        {{-- TODO: View all, goes to events --}}
    </section>

    <section class="main-content-wrap container">
        <div class="row" id="calendar-cards-wrapper">
            <div class="col-12">
                <div class="row">
                    {{--  TODO: little zoom in effect on image hover, see Stanford and Tubik as examples --}}
                    <div class="col-xl-4 col-lg-6">
                        <card-calendar :data="{{ $events[2] }}"></card-calendar>
                    </div>    
                    <div class="col-xl-4 col-lg-6">
                        <card-calendar :data="{{ $events[1] }}"></card-calendar>
                    </div>
                    <div class="col-xl-4 col-lg-6">
                        <card-calendar :data="{{ $events[0] }}"></card-calendar>
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
