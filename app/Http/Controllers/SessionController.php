<?php

namespace App\Http\Controllers;
use App\Http\Controllers\UserController;

class SessionController extends Controller
{
    public function destroy()
    {
        auth()->logout();
        return redirect()->route('index')->with([
            'message' => 'You have been logged out!',
            'status' => 'success'
        ]);
    }
    public function store()
    {
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ],[
            'email.required' => 'Email is required',
            'email/.email' => 'Enter a valid email address',
            'password.required' => 'Password is required'
        ]);
        if (auth()->attempt($attributes)) {
            session()->regenerate();
            return redirect()->route('admin1');
        }
        else{

            return back()->withErrors([
                'email' => 'Unrecorgnized email address',
                'password' => 'Wrong password, re-enter your password'
            ])->withInput();

        }
    }
}
