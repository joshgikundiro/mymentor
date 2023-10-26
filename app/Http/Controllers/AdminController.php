<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Mrequest;
use App\Models\Course;
use App\Models\Mentee;
use App\Models\Mentor;

class AdminController extends Controller
{
    //
    public function display()
    {
        $users = User::all();
        $requests = Mrequest::all();
        $courses = Course::paginate(3);
        return view('admin.admin', compact('users', 'requests', 'courses'));
    }
    public function getcourses()
    {
        return view('admin.uploadcourse');
    }
    public function postcourses(Request $request)
{
    // Validate the form inputs
    $validatedData = $request->validate([
        'title' => 'required|max:255',
        'file' => 'required|mimes:pdf,doc,docx,pptx|max:2048',
        'desc' => 'required',
    ]);

    // Save the course to the database
    $course = new Course;
    $course->title = $validatedData['title'];
    $course->desc = $validatedData['desc'];

    if ($request->hasFile('file')) {
        $fileName = time() . '.' . $request->file->getClientOriginalExtension();
        $request->file->storeAs('public/images', $fileName);
        $course->file = $fileName; // Set the 'file' field here
    }

    $course->save();

    // Redirect the user to the course page
    return redirect()->route('viewcourses')->with('success', 'Course uploaded successfully.');
}
public function viewcourses(){
    $courses = Course::all();
    return view('admin.viewcourses', compact('courses'));
}

public function deleteCourse($id)
{
    $course = Course::findOrFail($id);
    if($course){
        $course->delete();
        return redirect()->route('viewcourses')->with('success', 'Course deleted successfully.');

    }else{
        return redirect()->route('viewcourses')->with('error', 'Course not found.');
    }

}

}
