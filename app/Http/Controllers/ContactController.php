<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phoneno' => 'required|string|max:20',
            'message' => 'required|string',
        ]);

        Mail::to('your@email.com')->send(new ContactMail($data));

        return back()->with('success', 'Your message has been sent!');
    }
}