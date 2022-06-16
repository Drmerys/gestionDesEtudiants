<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function upgrade()
    {
        $title = "Les notes !";
        return view('student.upgrade', compact('title'));
    }

    public function contact()
    {
        return view('contact');
    }

}
