<?php

namespace App\Http\Controllers;

use App\Models\blogpost;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $posts = blogpost:: all();
        return view('blog', compact('posts'));
    }

    public function show(blogpost $post)
    {
        return view('posts.show', [
            'post' => $post
        ]);
    }
}
