<?php

namespace App\Http\Controllers;

use App\Activity;

class ActivityController extends Controller {
    public function __construct() {
        $this->middleware('auth')->except(['show', 'index']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $updated = Activity::where('updated', true)->get();
        $others  = Activity::where('updated', false)->get();

        return view('campus.activities.index', compact('updated', 'others'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('campus.activities.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store() {
        $attributes = request()->validate([
            'name'    => ['required', 'string', 'max:255', 'unique:activities'],
            'advisor' => ['string', 'max:255'],
            'updated' => [],
            'image'   => ['required', 'string'],
            'content' => ['required'],
        ]);

        if (request()->has('updated')) {
            $attributes['updated'] = 1;
        } else {
            $attributes['updated'] = 0;
        }

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
    public function show($name) {
        $activity = Activity::where('name', $name)->first(); 
        // should i use ->get() here instead?
        return view('campus.activities.show', compact('activity'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function edit($name) {
        $activity = Activity::where('name', $name)->first();
        
        return view('campus.activities.edit', compact('activity'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Activity $activity) {
        if (request()->has('updated')) {
            $activity->updated = 1;
        } else {
            $activity->updated = 0;
        }

        $activity->update(request(['name', 'image', 'advisor', 'content']), ['updated' => $activity->updated]);
        return redirect('/campus-life/activities');
    }

/**
 * Remove the specified resource from storage.
 *
 */
    public function destroy(Activity $activity) {
        $activity->delete();

        return redirect('/campus-life/activities');
    }
}
