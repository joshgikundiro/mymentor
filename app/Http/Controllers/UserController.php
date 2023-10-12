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
        $user = new User();
        if ($request->hasFile('profilePicture')) {
            $fileName = time() . '.' . $request->profilePicture->getClientOriginalExtension();
            $request->profilePicture->storeAs('public/images', $fileName);
            $user->profilePicture = $fileName;
        }
        $user->fullname = $request->input('fullname');
        $user->phoneNumber = $request->input('phoneNumber');
        $user->address = $request->input('address');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->password);
        $user->role = $request->role;
        // $user->profilePicture = $fileName;

        // $request->profilePicture->storeAs('public/images', $fileName);
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

        return redirect()->route('index')->with([
            'message' => 'User added successfully!',
            'status' => 'success'
        ]);
    }
}
