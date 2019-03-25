@extends('layouts.app')
@section('title', $news->title)
@section('content')
    <section class="page-wrap container article">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="title">{{ $news->title }}</h1>
            </div>
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <p class="category">{{ $news->category }}</p>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <p class="date">Published on {{ $news->publish_on }}</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="main-content-wrap container article">
        <p class="content">{{ $news->content }}</p>
        @if(Auth::check())
            <p><a href="/news/{{ $news->id }}/edit">Edit</a></p>
        @endif
    </section>

@endsection
