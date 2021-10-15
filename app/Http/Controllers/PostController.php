<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::withCount('ratings')
            ->withAvg('ratings', 'rating')
            ->withMax('ratings', 'rating')
            ->withMin('ratings', 'rating')
            ->get();

        return view('posts.index', compact('posts'));
    }
}
