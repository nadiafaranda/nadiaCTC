<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact; 
class ContactController extends Controller
{
    public function create()
    {
        return view('contactus');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'phone' => 'required|digits_between:10,15',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:2000',
        ]);

        ContactController::create($validatedData);

        return redirect('/contact-us')->with('success', 'Your message has been sent successfully!');
    }
}
?>