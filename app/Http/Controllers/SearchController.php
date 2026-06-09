<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Blog;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('q');

        if (!$query || strlen(trim($query)) < 1) {
            return redirect()->back()->with('error', 'Please enter a search term.');
        }

        $products = Product::where('status', true)
            ->where(function ($q) use ($query) {
                $q->where('name', 'LIKE', "%{$query}%")
                  ->orWhere('short_description', 'LIKE', "%{$query}%")
                  ->orWhere('description', 'LIKE', "%{$query}%")
                  ->orWhere('features', 'LIKE', "%{$query}%");
            })
            ->orderBy('sort_order')
            ->paginate(12)
            ->appends(['q' => $query]);

        $blogs = Blog::where('status', true)
            ->where(function ($q) use ($query) {
                $q->where('title', 'LIKE', "%{$query}%")
                  ->orWhere('short_description', 'LIKE', "%{$query}%")
                  ->orWhere('content', 'LIKE', "%{$query}%");
            })
            ->orderBy('published_at', 'desc')
            ->paginate(9, ['*'], 'blog_page')
            ->appends(['q' => $query]);

        return view('search-results', compact('query', 'products', 'blogs'));
    }
}
