<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Product;
use App\Models\Blog;
use App\Models\Slider;

class DashboardController extends Controller
{
    public function index()
    {
        $totalProducts = Product::count();
        $totalBlogs = Blog::count();
        $totalSliders = Slider::count();
        $unreadMessages = Contact::where('is_read', false)->count();
        $recentMessages = Contact::latest()->limit(5)->get();
        return view('admin.dashboard', compact('totalProducts', 'totalBlogs', 'totalSliders', 'unreadMessages', 'recentMessages'));
    }
}
