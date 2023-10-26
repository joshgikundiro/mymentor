<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\User;
use App\Models\Mrequest;
use Illuminate\Support\Facades\Auth;

class MrequestController extends Controller
{


    // ☠️☠️ function to show mentor request ☠️☠️

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'mentor_id' => 'required|exists:users,id',
            'mentee_id' => 'required|exists:users,id',
        ]);

        $mentorRequest = new Mrequest();
        $mentorRequest->ReceiverUserID = $validatedData['mentor_id'];
        $mentorRequest->RequesterUserID = $validatedData['mentee_id'];
        $mentorRequest->status = 'pending';
        $mentorRequest->save();

        return redirect()->back()->with('success', 'Mentorship request sent successfully!');
    }

    public function showRequest()
    {
        // Get the authenticated mentee's ID
        $menteeId = Auth::user()->id;


        // Retrieve mentorship requests for the authenticated mentee along with mentor details
        $requests = Mrequest::where('RequesterUserID', $menteeId)
            ->where('status', 'pending')
            ->with('receiver') // Assuming 'mentor' is the relationship in Mrequest
            ->get();

        return view('mentors.requests', compact('requests'));
    }

    public function deleteRequest($id)
    {
        $request = Mrequest::find($id);
        $request->delete();
        return redirect()->back()->with('success', 'Request deleted successfully!');
    }
}
