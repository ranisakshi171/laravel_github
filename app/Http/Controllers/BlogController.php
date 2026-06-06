<?php

namespace App\Http\Controllers;

use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::where('status', true)->orderBy('published_at', 'desc')->paginate(9);
        return view('blog', compact('blogs'));
    }

    public function show(string $slug)
    {
        $blog = Blog::where('slug', $slug)->where('status', true)->firstOrFail();
        $recentPosts = Blog::where('status', true)->where('id', '!=', $blog->id)->limit(3)->get();
        return view('blog-detail', compact('blog', 'recentPosts'));
    }
}
