<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;

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
        $category = Category::where('slug', $slug)->where('status', true)->firstOrFail();
        $categories = Category::where('status', true)->orderBy('sort_order')->get();
        $products = Product::where('category_id', $category->id)->where('status', true)->orderBy('sort_order')->paginate(12);
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
        return view('product-detail', compact('product', 'relatedProducts'));
    }
}
