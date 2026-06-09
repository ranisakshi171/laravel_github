<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WhatsAppController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'social_name' => 'required|string|max:50',
            'social_phone' => 'required|digits:10',
        ]);

        $phone = setting('company_phone') ?? '8796265233';
        $name = $request->social_name;
        $message = "Hi, I am $name. I am interested in your products.";

        return redirect('https://api.whatsapp.com/send?phone=91' . $phone . '&text=' . urlencode($message));
    }
}
