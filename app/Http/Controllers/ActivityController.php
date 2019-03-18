<?php

namespace App\Http\Controllers;

use App\Activity;

class ActivityController extends Controller
{
    public function __construct() {
        $this->middleware('auth')->except(['show', 'index']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activities = Activity::all();

        return view('campus.activities.index', compact('activities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('campus.activities.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $attributes = request()->validate([
            'name' => [],
            'image' => [],
            'content' => []
        ]);

        $attributes['owner_id'] = auth()->id();

        Activity::create($attributes);

        return redirect('/campus-life/activities');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function show(Activity $activity)
    {
        return view('campus.activities.show', compact('activity'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function edit(Activity $activity)
    {
        return view('campus.activities.edit', compact('activity'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Activity $activity)
    {
        $activity->update(request(['name', 'image', 'content']));
        return redirect('/campus-life/activities');
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy(Activity $activity)
    {
        $activity->delete();

        return redirect('/campus-life/activities');
    }
}
