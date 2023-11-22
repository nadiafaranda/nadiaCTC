<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {

        if (session()->get('isloggedin')!==true){
            return "Not Login";
        }

        $users = User::all();
        return view('home', ['users' => $users]);
 
    }

    public function create()
    {
        return view('createUser');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'age' => 'required|integer|min:1|max:120',
            'email' => 'required|email|unique:users',
            'phone' => 'required|numeric',
            'address' => 'required|string',
            'summary' => 'nullable|string',
        ]);

        User::create($validatedData);
        return redirect('/home');
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('showUser', ['user' => $user]);
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('editmember', ['user' => $user]);
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $validatedData = $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'age' => 'required|integer|min:1|max:120',
            'email' => 'required|email|unique:users,email,' . $id,
            'phone' => 'required|numeric',
            'address' => 'required|string',
            'summary' => 'nullable|string',
        ]);

        $user->update($validatedData);

        return redirect('/home');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect('/home');
    }
//login
    public function welcome()
    {
        return view ('welcome');
    }
    public function checklogin (Request $request)
    {
        $email = $request->get('email');
        $password = $request->get('password');


        dump($email);
        dump($password);
        //find the password for the record in user table that match with request password
        // $hashedpassword = User::where('email, $email')->value('password');

        // if (!$hashedpassword){
        //     return "Invalid Email";
        
        // }

        if($email === 'admin@admin.com' && $password === 'admin') {            
            session()->put('isloggedin', true);
            return redirect('/home');
        } else {
            return "Invalid password";
        }
    }
    //logout
    public function logout (Request $request)
    {
        session()->flush();

        return redirect('/');
    }
}

?>