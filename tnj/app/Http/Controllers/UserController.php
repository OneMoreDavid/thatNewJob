<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // show user registration
    public function create() {
        return view('users.register');
    }

    // store the new users
    public function store(Request $request) {
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'confirmed', 'min:6'],
        ]);

        // Hash the passwords
        $formFields['password'] = bcrypt($formFields['password']);

        // Create the user 
        $user = User::create($formFields);

        // Auto Login
        auth()->login($user);

        return redirect('/')->with('message', 'You have registered and are now logged in 🚀');
    }

    // logout

    public function logout(Request $request) {

        auth()->logout();
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have logged out 👋');
    }

    // user login form 
    public function login() {
        return view('users.login');
    }

    // Authenticate the user
    public function authenticate(Request $request) {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if(auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/')->with('message', 'Welcome back 👋');
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }
}
