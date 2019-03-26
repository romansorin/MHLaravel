@extends('layouts.app')
@section('title', 'Create a new post')
@section('content')
    <h1>
        Create a new post
    </h1>
    <form action="/news" method="POST">
        @csrf

        <label class="label" for="title">Title</label>
        <input type="text" class="input" name="title" placeholder="Title">

        <label class="label" for="category">Category</label>
        <input type="text" class="input" name="category" placeholder="Category">

        <label class="label" for="publish_on">Publish on:</label>
        <input type="date" class="input" name="publish_on" placeholder="mm/dd/yyyy">

        <label class="label" for="content">Content</label>
        <textarea name="content" class="textarea"></textarea>

        <button type="submit" class="button">Create post</button>
    </form>



@endsection
