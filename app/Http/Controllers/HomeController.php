<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Models\Category;
use App\Models\Product;
use App\Models\Blog;
use App\Models\Counter;
use App\Models\Testimonial;
use App\Models\Service;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::where('status', true)->orderBy('sort_order')->get();
        $categories = Category::where('status', true)->orderBy('sort_order')->get();
        $featuredProducts = Product::where('status', true)->where('is_featured', true)->orderBy('sort_order')->get();
        $blogs = Blog::where('status', true)->orderBy('published_at', 'desc')->limit(3)->get();
        $counters = Counter::where('status', true)->orderBy('sort_order')->get();
        $testimonials = Testimonial::where('status', true)->orderBy('sort_order')->get();
        $services = Service::where('status', true)->orderBy('sort_order')->get();
        $about = \App\Models\AboutUs::first();
        return view('home', compact('sliders', 'categories', 'featuredProducts', 'blogs', 'counters', 'testimonials', 'services', 'about'));
    }
}
