<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "title" => "required|min:3|max:15",
            "description" => "required|min:3|max:255",
            "is_published" => "required",
            "is_active" => "required"
        ]);

        // INSERTION:
        // Post::create($request->all());
        // dd('data inserted');

        Post::create([
            "title" => $request->title,
            "description" => $request->description,
            "is_published" => $request->is_published,
            "is_active" => $request->is_active
        ]);
        dd('post is successfully inserted');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
