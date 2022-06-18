<?php

namespace App\Http\Controllers;

class UpgradeController extends Controller
{
    public function showUpgrade()
    {
        $title = "Les notes !";
        return view('student.upgrade', compact('title'));
    }
}
