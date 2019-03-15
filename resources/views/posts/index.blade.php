@extends('layouts.app')

@section('content')

    <h1 class="title">Posts</h1>
    <ul>
        @foreach ($posts as $post)
            <a href="/posts/{{ $post->id }}">
                <li>{{ $post->title }}</li>
            </a>
        @endforeach
    </ul>
    <p>
        <a href="/posts/create">Create a new post</a>
    </p>
@endsection
