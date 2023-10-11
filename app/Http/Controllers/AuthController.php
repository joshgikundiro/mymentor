<?php

namespace App\Http\Controllers;
use App\Models\Mentor;
use App\Models\Mentee;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'fullName' => 'required|string',
            'email' => 'required|email',
            'userName' => 'required|string',
            'phoneNumber' => 'required|string',
            'address' => 'required|string',
            'password' => 'required|string',
            'role' => 'required|in:1,2', // Ensure that the role is either 1 or 2
            'profilePicture' => 'nullable|image', // Add validation rules for the profile picture
        ]);

        $user = new User();
        // Create a new user
        $user = User::create([
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'username'=>$data['username'],
            'phoneNumber'=>$data['phoneNumber'],
            'profilePicture'=>$data['profilePicture'],
            'fullName'=>$data['fullName'],
            'address'=>$data['address'],

             // Hash the password
        ]);

        if ($data['role'] == 1) {
            // Save the data as a Mentor
            Mentor::create([
                'user_id' => $user->id,

                // Add other Mentor fields as needed
            ]);
        } elseif ($data['role'] == 2) {
            // Save the data as a Mentee
            Mentee::create([
                'user_id' => $user->id,
                // Add other Mentee fields as needed
            ]);
        }

            // Flash a success message
            Session::flash('success', 'Registration successful! You can now log in.');

            // Redirect to the login page with the success message
            return redirect('/login');

        // Redirect or perform other actions as needed after saving the data.

    }
}
