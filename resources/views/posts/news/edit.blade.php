@extends('layouts.app')
@section('title', 'Edit post')
@section('content')
<section class="page-wrap container">
    <div class="col-12">
        <div class="row">
            <h1 class="page-heading">Edit post</h1>
        </div>
    </div>
</section>
<section class="main-content-wrap container">

    <form method="POST" action="/news/{{ $news->id }}" style="margin-bottom: 10px;">
        @method('PATCH')
        @csrf
<div class="form-group">
    
        <label class="label" for="title">Title</label>
        <input type="text" class="form-control" name="title" placeholder="Title" value="{{ $news->title }}">
</div>
<div class="form-group">
    
        <label class="label" for="Category">Category</label>
        <input type="text" class="form-control" name="category" placeholder="Category" value="{{ $news->category }}">
</div>
<div class="form-group">
    
        <label class="label" for="content">Content</label>
        <textarea name="content" class="form-control">{{ $news->content }}</textarea>
</div>
<div class="form-group">
    
        <label class="label" for="publish_on">Publish on:</label>
        <input type="date" class="form-control" name="publish_on" placeholder="mm/dd/yyyy" value="{{ $news->published_on }}">
</div>

        <button type="submit" class="btn btn-primary">Update post</button>
    </form>

    <form method="POST" action="/news/{{ $news->id }}">
        @method('DELETE')
        @csrf

        <button type="submit" class="btn btn-danger">Delete post</button>
    </form>
</section>
@endsection
