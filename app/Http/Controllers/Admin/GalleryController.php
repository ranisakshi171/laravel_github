<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::orderBy('sort_order')->paginate(20);
        return view('admin.galleries.index', compact('galleries'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:5120',
            'category' => 'nullable|string|max:255',
            'sort_order' => 'nullable|integer|min:0',
            'status' => 'nullable|boolean',
        ]);

        $validated['image'] = $request->file('image')->store('galleries', 'public');
        $validated['status'] = $request->boolean('status', true);

        Gallery::create($validated);

        return back()->with('success', 'Gallery image added successfully.');
    }

    public function update(Request $request, Gallery $gallery)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
            'category' => 'nullable|string|max:255',
            'sort_order' => 'nullable|integer|min:0',
            'status' => 'nullable|boolean',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('galleries', 'public');
        }

        $validated['status'] = $request->boolean('status', true);

        $gallery->update($validated);

        return back()->with('success', 'Gallery image updated successfully.');
    }

    public function destroy(Gallery $gallery)
    {
        $gallery->delete();
        return back()->with('success', 'Gallery image deleted successfully.');
    }
}
