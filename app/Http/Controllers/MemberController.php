<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
    {
        public function create()
        {
            return view('newmember');
        }
    
        public function store(Request $request)
        {
            $validatedData = $request->validate([
                'firstname' => 'required|max:255',
                'lastname' => 'required|max:255',
                'age' => 'required|integer',
                'phone' => 'required|digits_between:10,15',
                'email' => 'required|email|max:255|unique:members,email', 
                'address' => 'required|string|max:1000', 
                'summary' => 'required|string|max:1000', 
            ]);
    
            MemberController::create($validatedData);
    
            return redirect('/homepage')->with('success', 'Member added successfully!');
        }
    }
