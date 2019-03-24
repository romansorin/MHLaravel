@extends('layouts.app')
@section('title', 'Edit ' . $activity->name)
@section('content')
<h1 class="title">Edit Activity</h1>

    <form method="POST" action="/campus-life/activities/{{ $activity->id }}" style="margin-bottom: 10px;">
        @method('PATCH')
        @csrf

          <label class="label" for="name">Name</label>
        <input type="text" class="input" name="name" value="{{ $activity->name }}">

        <label class="label" for="advisor">Advisor</label>
        <input type="text" class="input" name="advisor" value="{{ $activity->advisor }}">

        <label class="label" for="content">Content</label>
        <textarea name="content" class="textarea">{{ $activity->content }}</textarea>

        <label class="label" for="updated">Updated</label>
		<input type="checkbox" class="input" name="updated" {!! $activity->updated == 1 ? 'checked' : '' !!}>

        <label class="label" for="image">Upload image link</label>
        <input type="text" class="input" name="image" value="{{ $activity->image }}">

        <button type="submit" class="button">Update post</button>
    </form>

    <form method="POST" action="/campus-life/activities/{{ $activity->id }}">
        @method('DELETE')
        @csrf

        <button type="submit" class="button">Delete activity</button>
    </form>
@endsection
