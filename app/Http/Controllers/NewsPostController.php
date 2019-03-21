<?php

namespace App\Http\Controllers;

use App\NewsPost;

class NewsPostController extends Controller
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
        $news = NewsPost::all();

        return view('posts.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $attributes = request()->validate([
           'title' => [],
           'category' => [],
           'content' => [],
           'published_on' => []
        ]);

        $attributes['owner_id'] = auth()->id();

        NewsPost::create($attributes);

        return redirect('/news');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\NewsPost  $news
     * @return \Illuminate\Http\Response
     */
    public function show(NewsPost $news)
    {
        return view('posts.news.show', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\NewsPost  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(NewsPost $news)
    {
        return view('posts.news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\NewsPost  $news
     * @return \Illuminate\Http\Response
     */
    public function update(NewsPost $news)
    {
        $news->update(request(['title', 'category', 'content', 'published_on']));
        return redirect('/news');
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy(NewsPost $news)
    {
        $news->delete();

        return redirect('/news');
    }
}
