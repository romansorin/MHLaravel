@extends('layouts.app')
@section('title', $activity->name)
@section('content')
   <section class="page-wrap container">
            <div class="col-12">
                <div class="row">
                <h1 class="page-heading">{{ $activity->name }}</h1>
            </div>
            <div class="row">
                <p class="page-subheading">Activities | Advisor: {{ $activity->advisor }}</p>
                </div>
            </div>
        </div>
    </section>
    <div class="container" src="{{ $activity->image }}" alt="Image of {{ $activity->name }}">
</div>
<section class="page-wrap container">
 <h1 class="page-heading">Information</h1>
    </section>
    <section class="main-content-wrap container article">
       
        <p class="content">{{ $activity->content }}</p>
        @if(Auth::check())
            <p><a href="/campus-life/activities/{{ $activity->name }}/edit">Edit</a></p>
        @endif
    </section>
@endsection
