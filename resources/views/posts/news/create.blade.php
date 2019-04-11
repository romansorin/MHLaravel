@extends('layouts.app')
@section('title', 'Create a new post')
@section('content')
<section class="page-wrap container">
    <div class="col-12">
        <div class="row">
            <h1 class="page-heading">
                Create a new post
            </h1>
        </div>
    </div>
</section>
<section class="main-content-wrap container">
    <form action="/news" method="POST">
        @csrf
        <div class="form-group">
            <label class="label" for="title">
                Title
            </label>
            <input class="form-control" name="title" placeholder="Title" type="text">
            </input>
        </div>
        <div class="form-group">
            <label class="label" for="category">
                Category
            </label>
            <input class="form-control" name="category" placeholder="Category" type="text">
            </input>
        </div>
        <div class="form-group">
            <label class="label" for="publish_on">
                Publish on:
            </label>
            <input class="form-control" name="publish_on" placeholder="mm/dd/yyyy" type="date">
            </input>
        </div>
        <div class="form-group">
            <label class="label" for="content">
                Content
            </label>
            <textarea class="form-control" name="content">
            </textarea>
        </div>
        <button class="btn btn-primary" type="submit">
            Create post
        </button>
    </form>
</section>
@endsection
