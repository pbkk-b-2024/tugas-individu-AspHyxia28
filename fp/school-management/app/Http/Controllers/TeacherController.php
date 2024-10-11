<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\Subject;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::with('subject')->get();
        return view('teachers.index', compact('teachers'));
    }

    public function create()
    {
        $subjects = Subject::all();
        return view('teachers.create', compact('subjects'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'dob' => 'required|date',
            'gender' => 'required|in:male,female',
            'address' => 'required|string|max:255',
            'phone' => 'nullable|string|max:20',
            'email' => 'required|string|email|max:255|unique:teachers',
            'subject_id' => 'required|exists:subjects,id',
        ]);

        Teacher::create($validatedData);
        return redirect()->route('teachers.index')->with('success', 'Teacher created successfully.');
    }

    public function show(Teacher $teacher)
    {
        return view('teachers.show', compact('teacher'));
    }

    public function edit(Teacher $teacher)
    {
        $subjects = Subject::all();
        return view('teachers.edit', compact('teacher', 'subjects'));
    }

    public function update(Request $request, Teacher $teacher)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'dob' => 'required|date',
            'gender' => 'required|in:male,female',
            'address' => 'required|string|max:255',
            'phone' => 'nullable|string|max:20',
            'email' => 'required|string|email|max:255|unique:teachers,email,' . $teacher->id,
            'subject_id' => 'required|exists:subjects,id',
        ]);

        $teacher->update($validatedData);
        return redirect()->route('teachers.index')->with('success', 'Teacher updated successfully.');
    }

    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        return redirect()->route('teachers.index')->with('success', 'Teacher deleted successfully.');
    }
}
