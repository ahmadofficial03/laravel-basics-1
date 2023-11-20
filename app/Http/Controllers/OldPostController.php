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
        $post = Post::all();
        return $post;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Post::create([
            'title' => 'React 18',
            'description' => 'React is very cool',
            'is_publish' => false,
            'is_active' => false,
        ]);
        return "insert successfully";
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
    public function update()
    {
        $post = Post::find(14);
        if (!$post) {
            return "post not found";
        }

        $post->update([
            "title" => 'React JS',
            "description" => "React is so Popular",
            "is_active" => true,
        ]);
        return "updated successfully";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        $post = Post::find(14);
        if (!$post) {
            return "Post is not found";
        } else {
            return $post->delete() . "post deleted successfully";
        }
    }
}
