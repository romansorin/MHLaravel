@extends('layouts.app')
@section('title', 'Edit post')
@section('content')
    <h1 class="title">Edit Post</h1>

    <form method="POST" action="/news/{{ $news->id }}" style="margin-bottom: 10px;">
        @method('PATCH')
        @csrf

        <label class="label" for="title">Title</label>
        <input type="text" class="input" name="title" placeholder="Title" value="{{ $news->title }}">

        <label class="label" for="Category">Category</label>
        <input type="text" class="input" name="category" placeholder="Category" value="{{ $news->category }}">

        <label class="label" for="content">Content</label>
        <textarea name="content" class="textarea">{{ $news->content }}</textarea>

        <label class="label" for="publish_on">Publish on:</label>
        <input type="date" class="input" name="publish_on" placeholder="mm/dd/yyyy" value="{{ $news->published_on }}">

        <button type="submit" class="button">Update post</button>
    </form>

    <form method="POST" action="/news/{{ $news->id }}">
        @method('DELETE')
        @csrf

        <button type="submit" class="button">Delete post</button>
    </form>
@endsection
