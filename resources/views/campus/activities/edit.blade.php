@extends('layouts.app')
@section('title', 'Edit ' . $activity->name)
@section('content')
<section class="page-wrap container">
    <div class="col-12">
        <div class="row">
            <h1 class="page-heading">Edit Activity</h1>
        </div>
    </div>
</section>
<section class="main-content-wrap container">
    <form method="POST" action="/campus-life/activities/{{ $activity->id }}" style="margin-bottom: 10px;">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label class="label" for="name">Name</label>
        <input type="text" class="form-control" name="name" value="{{ $activity->name }}">
        </div>
                <div class="form-group">
        <label class="label" for="advisor">Advisor</label>
        <input type="text" class="form-control" name="advisor" value="{{ $activity->advisor }}">
</div>
        <div class="form-group">
        <label class="label" for="content">Content</label>
        <textarea name="content" class="form-control">{{ $activity->content }}</textarea>
        </div>
        <div class="form-group">
        <label class="label" for="image">Upload image link</label>
        <input type="text" class="form-control" name="image" value="{{ $activity->image }}">
</div>
        <div class="form-group">
        <label class="label" for="updated">Updated</label>
		<input type="checkbox" class="form-check-label" name="updated" {!! $activity->updated == 1 ? 'checked' : '' !!}>
</div>
        <button type="submit" class="btn btn-primary">Update post</button>
    </form>

    <form method="POST" action="/campus-life/activities/{{ $activity->id }}">
        @method('DELETE')
        @csrf

        <button type="submit" class="btn btn-danger">Delete activity</button>
    </form>
</section>
@endsection
