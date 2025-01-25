<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = BlogPost::where('published_at', '<=', now())
            ->orderBy('published_at', 'desc')
            ->paginate(9);

        return view('blog', compact('posts'));
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $post = BlogPost::where('slug', $slug)
            ->where('published_at', '<=', now())
            ->firstOrFail();

        return view('blog.show', compact('post'));
    }
}
