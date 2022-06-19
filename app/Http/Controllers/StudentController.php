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

    public function show()
    {
        $students = Student::all();
        return view('student.student', compact('students'));
    }

    public function contact()
    {
        return view('contact');
    }

}
