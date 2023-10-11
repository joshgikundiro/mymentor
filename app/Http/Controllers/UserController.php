<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Mentor;
use App\Models\Mentee;

class UserController extends Controller
{
    public function index()
    {
        $users = User::query()->latest()->paginate(10);
        return view('welcome', compact('users'));
    }
    public function store(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role = $request->role;
        $user->save();

        if ($request->role == 1) {
            $mentor = new Mentor;
            $mentor->user_id = $user->id;
            $mentor->save();
        } elseif ($request->role == 2) {
            $mentee = new Mentee;
            $mentee->user_id = $user->id;
            $mentee->save();
        }

        return redirect()->route('users.index');
    }
}
