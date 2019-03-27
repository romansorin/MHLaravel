@extends('layouts.app')
@section('title', 'Activities')
@section('content')
<section class="activity-index page-wrap container">
    <div class="col-12">
        <div class="row">
            <h1 class="page-heading heading">Activities</h1>
            <div class="border"></div>
            <p class="page-subheading subheading">Mentor High offers its 3000 students an array of extra curricular clubs and activities. These programs range from after school clubs, such as Ecology Club, to programs that enrich the community, like the Community Service Club and annual Harvest for Hunger food drive. On average, every graduating class at Mentor High donates nearly 60,000 hours of community service.</p>
        </div>
    </div>
</section>

<section class="activity-index page-wrap container">
    <div class="col-12">
        <div class="row">
            <h1 class="page-heading section-heading">Updated - 2018</h1>
        </div>
    </div>
</section>

<section class="activity-index main-content-wrap container">
    <div class="row">
        <div class="col-12 list-group-horizontal">
        <ul class="list-group list-group-flush">
        @foreach($updated as $activity)
            <a href="/campus-life/activities/{{ $activity->id }}">
                <li class="list-group-item">- {{ $activity->name }}</li>
            </a>
        @endforeach
        </ul>
        </div>
    </div>
</section>

<section class="activity-index page-wrap container">
    <div class="col-12">
        <div class="row">
            <h1 class="page-heading section-heading">Other activities</h1>
        </div>
    </div>
</section>

<section class="activity-index main-content-wrap container">
    <div class="row">
        <div class="col-12 list-group-horizontal">
    <ul class="list-group list-group-flush">
    @foreach($others as $activity)
    <a href="/campus-life/activities/{{ $activity->id }}">
        <li class="list-group-item">- {{ $activity->name }}</li>
    </a>
    @endforeach
    </ul>
    </div></div>
</section>

@if(Auth::check())
        <p><a href="/campus-life/activities/create">Add an activity</a></p>
@endif
@endsection
