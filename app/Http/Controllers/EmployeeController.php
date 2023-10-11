<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::query()->latest()->paginate(10);

        // return view('user.index',compact('employees'));
        return view('emp', compact('employees'));
    }

    public function create()
    {
        // return view('user.create');
    }

    public function store(Request $request)
    {
        $employee= new Employee();
        $fileName = time() . '.' . $request->image->extension();

        $employee->name = $request->input('name');
        $employee->email = trim($request->input('email'));
        $employee ->post = $request->input('post');
        $employee->image = $fileName;
        $request->image->storeAs('public/images', $fileName);



        $employee->save();

        return redirect()->route('index')->with([
            'message' => 'User added successfully!',
            'status' => 'success'
        ]);
    }
}
