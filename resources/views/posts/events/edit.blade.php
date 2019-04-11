@extends('layouts.app')
@section('title', 'Edit event')
@section('content')
<section class="page-wrap container">
    <div class="col-12">
        <div class="row">
            <h1 class="page-heading">
                Edit event
            </h1>
        </div>
    </div>
</section>
<section class="main-content-wrap container">
    <form action="/news/{{ $event->id }}" method="POST" style="margin-bottom: 10px;">
        @method('PATCH')
        @csrf
        <div class="form-group">
            <label class="label" for="title">
                Title
            </label>
            <input class="form-control" name="title" placeholder="Title" type="text" value="{{ $event->title }}">
            </input>
        </div>
        <div class="form-group">
            <label class="label" for="image">
                Image URL:
            </label>
            <input class="form-control" name="image" placeholder="Image..." type="text" value="{{ $event->image }}">
            </input>
        </div>
        <div class="form-group">
            <label class="label" for="description">
                Content
            </label>
            <textarea class="form-control" name="description">{{ $event->description }}</textarea>
        </div>
        <div class="form-group">
            <label class="label" for="event_date">
                Event date:
            </label>
            <input class="form-control" name="event_date" placeholder="mm/dd/yyyy" type="date" value="{{ $event->event_date }}">
            </input>
        </div>
        <button class="btn btn-primary" type="submit">
            Update event
        </button>
    </form>
    <form action="/news/{{ $event->id }}" method="POST">
        @method('DELETE')
        @csrf
        <button class="btn btn-danger" type="submit">
            Delete event
        </button>
    </form>
</section>
@endsection
