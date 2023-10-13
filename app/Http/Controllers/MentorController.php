<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Mentor;
use App\Models\Mentee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class MentorController extends Controller
{

    public function display()
    {

        // $admin= Auth::user();
        // return view('mentors.admin', compact('users','admin'));
        // $users= User::query()->latest()->paginate(3);
        $users = User::where('role', 1)->get();
        return view('mentors.admin', compact('users'));
        // return view('mentors.admin', compact('users'));
    }
    public function viewall(){
        // $users= User::all();
        $users = User::where('role', 1)->get();
        return view('mentors.allmentors', compact('users'));
    }
    public function profileview(){
        $user= Auth::user();
        return view('mentors.profile', compact('user'));
    }
    public function update(Request $request)
    {
        $user = User::find(Auth::id());
        $user->profession = $request->input('profession');
        $user->bio = $request->input('bio');
        $user->fullname = $request->input('fullname');
        $user->phoneNumber = $request->input('phoneNumber');
        $user->address = $request->input('address');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect()->route('profile')->with([
            'message' => 'Information details updated successfully!',
            'status' => 'success'
        ]);
    }

    //edit profiles
    public function profileedit()
    {
        $user = Auth::user();
        return view('mentors.profileupdate', compact('user'));

    }
    // ⚒️function to show mentor view profile⚒️
    public function show($id)
{
    $mentor = User::findOrFail($id);
    return view('mentors.mentorprofile', compact('mentor'));
    // return view('mentor.mentorprofile', compact('mentor'));
}
}

