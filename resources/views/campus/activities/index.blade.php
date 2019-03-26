@extends('layouts.app')
@section('title', 'Activities')
@section('content')
<section class="page-wrap container">
    <div class="row">
        <h1 class="page-heading">Activities</h1>
    </div>
    <div class="row">
        <p class="page-subheading">Mentor High offers its 3000 students an array of extra curricular clubs and activities. These programs range from after school clubs, such as Ecology Club, to programs that enrich the community, like the Community Service Club and annual Harvest for Hunger food drive. On average, every graduating class at Mentor High donates nearly 60,000 hours of community service.</p>
    </div>
</section>

<section class="page-wrap container">
    <div class="row">
        <h1 class="page-heading">Updated - 2018</h1>
    </div>
</section>

<section class="main-content-wrap container">
    <div class="row">
        <ul>
    @foreach($updated as $activity)
    <a href="/campus-life/activities/{{ $activity->id }}">
        <li>{{ $activity->name }}</li>
    </a>
    @endforeach
</ul>
    </div>
</section>

<section class="page-wrap container">
    <div class="row">
        <h1 class="page-heading">Other activities</h1>
    </div>
</section>

<section class="main-content-wrap container">
    <ul>
    @foreach($others as $activity)
    <a href="/campus-life/activities/{{ $activity->id }}">
        <li>{{ $activity->name }}</li>
    </a>
    @endforeach
</ul>
</section>
   

{{-- @if(Auth::check())
        <p><a href="/campus-life/activities/create">Add an activity</a></p>
    @endif --}}
@endsection
