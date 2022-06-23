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

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     * Send all student to index
     */
    public function index(Request $request)
    {
        $students = Student::all();
        return view('student.student', compact('students'));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     * Rend to create view
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * Allow to store student
     */
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
            'image' => 'image|mimes:png,jpeg,jpg,gif,svg',
        ]);

        $image = $request->file('image');
        $destinationPath = 'image/';
        $profileImage = date('YmdHis'). "." .$image->getClientOriginalExtension();
        $image->move($destinationPath, $profileImage);
        $validateData['image'] = $profileImage;

        $students = Student::create($validateData);

        return redirect('students')->with('success', 'Etudiant ajouté avec succès');
    }

    public function show($id)
    {
        $students = Student::findOrFail($id);
        return view('student.show', [
            'students' => $students
        ]);
    }

    public function edit($id)
    {
        $students = Student::findOrFail($id);
        return view('student.edit', [
            'students' => $students
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'lastName' => 'required|max:255',
            'firstName' => 'required|max:255',
            'age' => 'required',
            'email' => 'required|max:255',
            'educationSector' => 'required|max:255',
            'phone' => 'required',
            'educationLevel' => 'required|max:255',
            'image' => 'image|mimes:png,jpeg,jpg,gif,svg',
        ]);

        $student = Student::findOrFail($id);
        $student->lastName = $request->lastName;
        $student->firstName = $request->firstName;
        $student->age = $request->age;
        $student->email = $request->email;
        $student->educationSector = $request->educationSector;
        $student->phone = $request->phone;
        $student->educationLevel = $request->educationLevel;
        $student->image = $request->image;

        $student->save();

        return redirect()->route('students.students')->with('success', 'Etudiant modifié avec succès');
    }

    public function destroy($id)
    {
        Student::find($id)->delete();

        return redirect()->route('students.students')->with('success', 'Etudiant supprimé avec succès');
    }

    public function contact()
    {
        return view('student.contact');
    }

}
