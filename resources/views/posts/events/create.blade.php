@extends('layouts.app')
@section('title', 'Create a new event')
@section('content')
<section class="page-wrap container">
    <div class="col-12">
        <div class="row">
            <h1 class="page-heading">
                Create a new event
            </h1>
        </div>
    </div>
</section>
<section class="main-content-wrap container">
    <form action="/events" method="POST">
        @csrf
        <div class="form-group">
            <label class="label" for="title">
                Title
            </label>
            <input class="form-control" name="title" placeholder="Title" type="text">
            </input>
        </div>
        <div class="form-group">
            <label class="label" for="description">
                Description
            </label>
            <textarea class="form-control" cols="30" name="description" rows="10">
            </textarea>
        </div>
        <div class="form-group">
            <label class="label" for="image">
                Upload image link
            </label>
            <input class="form-control" name="image" placeholder="Your link here.." type="text">
            </input>
        </div>
        <div class="form-group">
            <label class="label" for="event_date">
                Event date
            </label>
            <input class="form-control" name="event_date" placeholder="mm/dd/yyyy" type="date">
            </input>
        </div>
        <button class="btn btn-primary" type="submit">
            Create event
        </button>
    </form>
</section>
@endsection
