<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Mentor;
use App\Models\Mentee;
use App\Models\Mrequest;
use Illuminate\Support\Facades\Auth;

class MenteeController extends Controller
{


    public function profileview()
    {
        $user = Auth::user();
        return view('mentees.profile', compact('user'));
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
        return view('mentees.profileupdate', compact('user'));
    }
    // ⚒️function to show mentor view profile⚒️


    //☠️function to display requests☠️
    public function display()
    {
        // Get the authenticated mentee's ID
        $menteeId = Auth::user()->id;

        $requests = Mrequest::where('ReceiverUserID', $menteeId)
            ->where('status', 'pending')
            ->with('requester')
            ->paginate(3);

        return view('mentees.admin', compact('requests'));
    }
    public function viewall()
    {
        $menteeId = Auth::user()->id;

        $requests = Mrequest::where('ReceiverUserID', $menteeId)
            ->where('status', 'pending')
            ->with('requester')
            ->get();

        return view('mentees.requests', compact('requests'));
    }

    public function showProfile(User $mentee)
    {

        return view('mentees.mentee', compact('mentee'));
    }
    public function deleteRequest($id)
    {
        $requests = Mrequest::find($id);
        if ($requests) {
            $requests->delete();
            return redirect()->back()->with('success', 'Request deleted successfully!');
        } else {
            return redirect()->back()->with('error', 'Request not found!');
        }
    }
}

