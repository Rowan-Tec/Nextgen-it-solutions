<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactInquiry;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required',
            'email'   => 'required|email',
            'message' => 'required',
        ]);

        ContactInquiry::create($validated);

        return back()->with(
            'success',
            'Your enquiry has been sent. Our team will get in touch with you soon.'
        );
    }
}