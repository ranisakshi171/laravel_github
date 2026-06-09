<?php

namespace App\Http\Controllers;

use App\Models\Gallery;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::where('status', true)->orderBy('sort_order')->get();
        $categories = Gallery::where('status', true)->select('category')->distinct()->pluck('category')->filter();
        return view('gallery', compact('galleries', 'categories'));
    }
}
