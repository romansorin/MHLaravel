@extends('layouts.app')

@section('content')
    <section class="page-wrap container article">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="title">{{ $post->title }}</h1>
            </div>
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <p class="category">{{ $post->category }}</p>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <p class="date">Published on {{ $post->published_on }}</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="main-content-wrap container article">
        <p class="content">{{ $post->content }}</p>
        <p><a href="/posts/{{ $post->id }}/edit">Edit</a></p>
    </section>

@endsection
