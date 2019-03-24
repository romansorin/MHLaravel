@extends('layouts.app')
@section('title', 'Activities')
@section('content')
<h1 class="title">
    Activities
</h1>

<h1 class="title">Updated</h1>
<ul>
    @foreach($updated as $activity)
    <a href="/campus-life/activities/{{ $activity->id }}">
        <li>{{ $activity->name }}</li>
    </a>
    @endforeach
</ul>
<h1 class="title">Other</h1>
<ul>
    @foreach($others as $activity)
    <a href="/campus-life/activities/{{ $activity->id }}">
        <li>{{ $activity->name }}</li>
    </a>
    @endforeach
</ul>
 @if(Auth::check())
        <p><a href="/campus-life/activities/create">Add an activity</a></p>
    @endif
@endsection
