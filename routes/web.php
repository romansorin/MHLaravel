<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/campus-life', function () {
    return view('campus.campus');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/academics', function () {
    return view('academics.academics');
});

Route::get('/the-arts', function () {
    return view('the-arts.the-arts');
});

Route::get('/resources', function () {
    return view('resources.resources');
});

Route::resource('news', 'NewsPostController');
Route::resource('events', 'EventPostController');
Route::resource('campus-life/activities', 'ActivityController');
// TODO: using these routes for when name instead of ID in URL is implemented.
// @see ActivityController::show();
// Route::get('campus-life/activities/{name}', 'ActivityController@show');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Auth::routes();
