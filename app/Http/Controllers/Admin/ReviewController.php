<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::with('product')->orderBy('created_at', 'desc')->paginate(20);
        return view('admin.reviews.index', compact('reviews'));
    }

    public function approve(Review $review)
    {
        $review->update(['status' => true]);
        return back()->with('success', 'Review approved successfully.');
    }

    public function destroy(Review $review)
    {
        $review->delete();
        return back()->with('success', 'Review deleted successfully.');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'product_id' => 'required|exists:products,id',
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'required|string',
        ]);

        Review::create($validated);

        return back()->with('success', 'Thank you! Your review has been submitted and will appear after approval.');
    }
}
