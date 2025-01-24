<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'message' => 'required|min:10',
        ]);

        Mail::to('senevirathneravidu@gmail.com')->send(new ContactFormMail($validated));

        return back()->with('success', 'Thank you for your message. We will contact you soon!');
    }
}
