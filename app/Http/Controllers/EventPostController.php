<?php

namespace App\Http\Controllers;

use App\EventPost;

class EventPostController extends Controller {
    public function __construct() {
        $this->middleware('auth')->except(['show', 'index']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $events = EventPost::all();

        return view('posts.events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('posts.events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store() {
        $attributes = request()->validate([
            'title'       => ['required', 'string', 'max:40'],
            'description' => ['required', 'string'],
            'image'       => ['required', 'string'],
            'event_date'  => ['date'],
        ]);

        $attributes['owner_id'] = auth()->id();

        EventPost::create($attributes);

        return redirect('/events');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EventPost  $event
     * @return \Illuminate\Http\Response
     */
    public function show(EventPost $event) {
        return view('posts.events.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EventPost  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(EventPost $event) {
        return view('posts.events.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\EventPost  $event
     * @return \Illuminate\Http\Response
     */
    public function update(EventPost $event) {
        $event->update(request(['title', 'description', 'image', 'event_date']));
        return redirect('/events');
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy(EventPost $event) {
        $event->delete();

        return redirect('/events');
    }
}
