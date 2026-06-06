<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Counter;
use Illuminate\Http\Request;

class CounterController extends Controller
{
    public function index()
    {
        $counters = Counter::orderBy('sort_order')->get();
        return view('admin.counters.index', compact('counters'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'icon' => 'nullable|string|max:255',
            'label' => 'required|string|max:255',
            'value' => 'required|integer|min:0',
            'max_value' => 'required|integer|min:0',
            'prefix' => 'nullable|string|max:10',
            'suffix' => 'nullable|string|max:10',
            'sort_order' => 'nullable|integer|min:0',
            'status' => 'nullable|boolean',
        ]);

        $validated['status'] = $request->boolean('status', true);
        Counter::create($validated);

        return back()->with('success', 'Counter created successfully.');
    }

    public function update(Request $request, Counter $counter)
    {
        $validated = $request->validate([
            'icon' => 'nullable|string|max:255',
            'label' => 'required|string|max:255',
            'value' => 'required|integer|min:0',
            'max_value' => 'required|integer|min:0',
            'prefix' => 'nullable|string|max:10',
            'suffix' => 'nullable|string|max:10',
            'sort_order' => 'nullable|integer|min:0',
            'status' => 'nullable|boolean',
        ]);

        $validated['status'] = $request->boolean('status', true);
        $counter->update($validated);

        return back()->with('success', 'Counter updated successfully.');
    }

    public function destroy(Counter $counter)
    {
        $counter->delete();
        return back()->with('success', 'Counter deleted successfully.');
    }
}
