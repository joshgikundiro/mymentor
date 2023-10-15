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
    public function display()
    {
        $users = User::where('role', 1)->orderBy('created_at', 'desc')->paginate(3);
        return view('mentees.admin', compact('users'));

    }

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
