@extends('layouts.app')
@section('title', 'Create a new event')
@section('content')
    <h1>Create a new event</h1>
    <form action="/events" method="POST">
        @csrf

        <label class="label" for="title">Title</label>
        <input type="text" class="input" name="title" placeholder="Title">

        <label class="label" for="description">Description</label>
        <textarea name="description" class="textarea" cols="30" rows="10"></textarea>

        <label class="label" for="image">Upload image link</label>
        <input type="text" class="input" name="image" placeholder="Your link here..">

        <label class="label" for="event_date">Event date</label>
        <input type="date" class="input" name="event_date" placeholder="mm/dd/yyyy">

        <button type="submit" class="button">Create event</button>
    </form>
@endsection
