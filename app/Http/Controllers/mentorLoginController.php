<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Mentor;
use App\Models\Mentee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class mentorLoginController extends Controller
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
        ], [
            'email.required' => 'Email is required',
            'email/.email' => 'Enter a valid email address',
            'password.required' => 'Password is required'
        ]);

        $user = User::where('email', $attributes['email'])->first();

        if ($user && $user->role == 1 && auth()->attempt($attributes)) {
            session()->regenerate();
            return redirect()->route('admin2');
        } else {
            return back()->withErrors([
                'email' => 'Unrecognized email address or invalid role',
                'password' => 'Wrong password, please try again'
            ])->withInput();
        }
    }
}
