<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'contact_name' => 'required|string|max:255',
            'contact_email' => 'required|email|max:255',
            'contact_phone' => 'nullable|string|max:20',
            'contact_location' => 'nullable|string|max:255',
            'contact_message' => 'required|string',
        ]);

        Contact::create([
            'name' => $validated['contact_name'],
            'email' => $validated['contact_email'],
            'phone' => $validated['contact_phone'] ?? '',
            'subject' => $validated['contact_location'] ?? '',
            'message' => $validated['contact_message'],
        ]);

        return back()->with('success', 'Thank you for your message. We will get back to you soon!');
    }
}
