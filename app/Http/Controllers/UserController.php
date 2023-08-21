<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    // Show register form
    public function create()
    {
        return view('users.create');
    }

    // Register User
    public function store(Request $request)
    {
        $inputFields = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required',
            'password' => 'required|min:6'
        ]);

        $inputFields['password'] = bcrypt($request['password']);

        $user = User::create($inputFields);

        auth()->login($user);

        return redirect('/')->with('message', 'Registration Completed');
    }


    // Logout A User
    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'Logged-out Successfully!');
    }

    // Show Form For Login
    public function login()
    {
        return view('users.login');
    }


    // Login Authentication To Check Whether User Exists
    public function authenticate(Request $request)
    {
        $inputFields = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if(auth()->attempt($inputFields))
        {
            $request->session()->regenerate();

            return redirect('/')->with('message', 'Logged-in Successfully');
        }

        return back()->withErrors(['email'=> 'Invalid Credentionals'])->onlyInput('email');
    }
}
