@extends('layouts.app')
@section('title', 'Add an activity')
@section('content')
<h1>Add an activity</h1>
    <form action="/campus-life/activities" method="POST">
        @csrf

        <label class="label" for="name">Name</label>
        <input type="text" class="input" name="name" placeholder="Name">

        <label class="label" for="advisor">Advisor</label>
        <input type="text" class="input" name="advisor" placeholder="Advisor">

        <label class="label" for="content">Content</label>
        <textarea name="content" class="textarea" cols="30" rows="10"></textarea>

        <label class="label" for="updated">Updated</label>
		<input type="checkbox" class="input" name="updated" value="0">

        <label class="label" for="image">Upload image link</label>
        <input type="text" class="input" name="image" placeholder="Your link here..">

        <button type="submit" class="button">Create activity</button>
    </form>
@endsection
