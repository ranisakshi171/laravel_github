<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Review;

class ProductController extends Controller
{
    public function index()
    {
        $categories = Category::where('status', true)->orderBy('sort_order')->get();
        $products = Product::where('status', true)->orderBy('sort_order')->paginate(12);
        return view('products', compact('categories', 'products'));
    }

    public function category(string $slug)
    {
        $categories = Category::where('status', true)->orderBy('sort_order')->get();
        $category = $categories->firstWhere('slug', $slug);
        $products = $category
            ? Product::where('category_id', $category->id)->where('status', true)->orderBy('sort_order')->paginate(12)
            : Product::where('status', true)->orderBy('sort_order')->paginate(12);
        return view('products', compact('categories', 'products', 'category'));
    }

    public function show(string $slug)
    {
        $product = Product::where('slug', $slug)->where('status', true)->firstOrFail();
        $relatedProducts = Product::where('category_id', $product->category_id)
            ->where('id', '!=', $product->id)
            ->where('status', true)
            ->limit(4)
            ->get();
        $reviews = Review::where('product_id', $product->id)->where('status', true)->orderBy('created_at', 'desc')->get();
        $avgRating = $reviews->avg('rating');
        return view('product-detail', compact('product', 'relatedProducts', 'reviews', 'avgRating'));
    }
}
