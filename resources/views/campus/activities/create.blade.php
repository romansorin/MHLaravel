@extends('layouts.app')
@section('title', 'Add an activity')
@section('content')
<section class="page-wrap container">
    <div class="col-12">
        <div class="row">
            <h1 class="page-heading">
                Add an activity
            </h1>
        </div>
    </div>
</section>
<section class="main-content-wrap container">
        <form action="/campus-life/activities" method="POST">
            @csrf
            <div class="form-group">
                <label class="label" for="name">
                    Name
                </label>
                <input class="form-control" name="name" placeholder="Name" type="text">
              
            </div>
            <div class="form-group">
                <label class="label" for="advisor">
                    Advisor
                </label>
                <input class="form-control" name="advisor" placeholder="Advisor" type="text">
      
            </div>
            <div class="form-group">
                <label class="label" for="content">
                    Content
                </label>
                <textarea class="form-control" cols="30" name="content" rows="10">
                </textarea>
            </div>
            <div class="form-group">
                <label class="label" for="image">
                    Upload image link
                </label>
                <input class="form-control" name="image" placeholder="Your link here.." type="text">
              
            </div>
             <div class="form-group">
                <input class="form-check-label" name="updated" type="checkbox" value="0">
                <label class="label" for="updated">
                    Updated
                </label>
          
            </div>
            <button class="btn btn-primary" type="submit">
                Create activity
            </button>
        </form>
</section>
@endsection
