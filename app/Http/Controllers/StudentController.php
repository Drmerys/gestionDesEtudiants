<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function home()
    {
        return view('dashboard');
    }

    public function index(Request $request)
    {
        $students = Student::all();
        return view('student.student', compact('students'));
    }

    public function create()
    {
        return view('student.create');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'lastName' => 'required|max:255',
            'firstName' => 'required|max:255',
            'age' => 'required',
            'email' => 'required|max:255',
            'educationSector' => 'required|max:255',
            'phone' => 'required',
            'educationLevel' => 'required|max:255',
            'image' => 'required|image|mimes:png,jpeg,jpg,gif,svg',
        ]);

        $image = $request->file('image');
        $destinationPath = 'image/';
        $profileImage = date('YmdHis'). "." .$image->getClientOriginalExtension();
        $image->move($destinationPath, $profileImage);
        $validateData['image'] = $profileImage;

        $students = Student::create($validateData);

        return redirect('students.students');
    }

    public function show()
    {
//        $students = Student::all();
//        return view('student.student', compact('students'));
    }

    public function contact()
    {
        return view('contact');
    }

}
