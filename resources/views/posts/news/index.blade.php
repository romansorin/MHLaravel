@extends('layouts.app')
@section('title', 'News')
@section('content')

    <h1 class="title">News</h1>
    <ul>
        @foreach ($news as $post)
            <a href="/news/{{ $post->id }}">
                <li>{{ $post->title }}</li>
            </a>
        @endforeach
    </ul>
    @if(Auth::check())
        <p><a href="/news/create">Create a new post</a></p>
    @endif
@endsection
