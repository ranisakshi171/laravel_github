<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Counter;
use App\Models\Testimonial;

class AboutController extends Controller
{
    public function index()
    {
        $about = AboutUs::first();
        $counters = Counter::where('status', true)->orderBy('sort_order')->get();
        $testimonials = Testimonial::where('status', true)->orderBy('sort_order')->get();
        return view('about', compact('about', 'counters', 'testimonials'));
    }
}
