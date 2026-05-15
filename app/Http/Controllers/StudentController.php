<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    // Afficher liste
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    // Form ajout
    public function create()
    {
        return view('students.create');
    }

    // Enregistrer
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:20',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'age' => 'required|integer'
        ]);

        Student::create($request->all());

        return redirect()->route('students.index')
            ->with('success', 'Étudiant ajouté avec success');
    }

    // Form modification
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    // Update
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required|min:3|max:20',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'age' => 'required|integer'
        ]);

        $student->update($request->all());

        return redirect()->route('students.index')
            ->with('success', 'Étudiant a été modifié');
    }

    // Delete
    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('students.index')
            ->with('success', 'Étudiant a été supprimé');
    }
}
