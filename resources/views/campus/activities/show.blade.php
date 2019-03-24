@extends('layouts.app')
@section('title', $activity->name)
@section('content')
   <section class="page-wrap container article">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="title">{{ $activity->name }}</h1>
                <h1 class="title">{{ $activity->advisor }}</h1>
            </div>
        </div>
    </section>

    <section class="main-content-wrap container article">
        <img src="{{ $activity->image }}" alt="{{ $activity->name }}">
        <p class="content">{{ $activity->content }}</p>
        @if(Auth::check())
            <p><a href="/campus-life/activities/{{ $activity->id }}/edit">Edit</a></p>
        @endif
    </section>
@endsection
