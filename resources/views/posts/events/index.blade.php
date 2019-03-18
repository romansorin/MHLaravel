@extends('layouts.app')
@section('title', 'Events')
@section('content')

    <h1 class="title">Events</h1>
    <ul>
        @foreach ($events as $event)
            <a href="/events/{{ $event->id }}">
                <li>{{ $event->title }}</li>
            </a>
        @endforeach
    </ul>
    @if(Auth::check())
        <p><a href="/events/create">Create a new event</a></p>
    @endif
@endsection
