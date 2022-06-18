<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function contact()
    {
        return view('contact');
    }

}
