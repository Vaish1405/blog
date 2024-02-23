<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class loginRegister extends Controller
{
    function login() {
        return view('login');
    }
    function register() {
        return view('register');
    }
    function loginPost(Request $request) {
        $request->validate([
            'email'=> 'required',
            'password' => 'required' 
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended(route('home'));
        }
        return redirect(route('login'))->with('error', 'login details are not valid');
    }
    function registerPost(Request $request) {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required'
        ]);

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);

        $user = User::create($data);

        if(!$user) {
            return redirect(route('register'))->with("error", "Registration failed, try again.");
        }
        return redirect(route('login'))->with('success', 'Registration successful, Login!');
    }
    function logout() {
        Auth::logout();
        return redirect(route('home'))->with('success', 'Logout successful');
    }
}
