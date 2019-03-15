@extends('layouts.app')

@section('content')
    <h1 class="title">Edit Post</h1>

    <form method="POST" action="/posts/{{ $post->id }}" style="margin-bottom: 10px;">
        @method('PATCH')
        @csrf

        <label class="label" for="title">Title</label>
        <input type="text" class="input" name="title" placeholder="Title" value="{{ $post->title }}">

        <label class="label" for="Category">Category</label>
        <input type="text" class="input" name="category" placeholder="Category" value="{{ $post->category }}">

        <label class="label" for="content">Content</label>
        <textarea name="content" class="textarea">{{ $post->content }}</textarea>

        <button type="submit" class="button">Update post</button>
    </form>

    <form method="POST" action="/posts/{{ $post->id }}">
        @method('DELETE')
        @csrf

        <button type="submit" class="button">Delete post</button>
    </form>
@endsection
