@extends('layouts.app')
@section('title', $event->title)
@section('content')
    <section class="page-wrap container article">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="title">{{ $event->title }}</h1>
            </div>
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <p class="date">{{ $event->event_date }}</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="main-content-wrap container article">
        <img src="{{ $event->image }}" alt="{{ $event->title }}">
        <p class="content">{{ $event->description }}</p>
        @if(Auth::check())
            <p><a href="/events/{{ $event->id }}/edit">Edit</a></p>
        @endif
    </section>

@endsection
