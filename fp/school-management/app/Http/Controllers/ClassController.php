<?php

namespace App\Http\Controllers;

use App\Models\ClassRoom; // Adjust this to your model name
use App\Models\Teacher;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index()
    {
        $classes = ClassRoom::with('teacher')->get(); // Use ClassRoom here
        return view('classes.index', compact('classes'));
    }

    public function create()
    {
        $teachers = Teacher::all();
        return view('classes.create', compact('teachers'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'capacity' => 'required|integer',
            'teacher_id' => 'required|exists:teachers,id',
        ]);

        ClassRoom::create($validatedData); // Use ClassRoom here
        return redirect()->route('classes.index')->with('success', 'Class created successfully.');
    }

    public function show(ClassRoom $classRoom)
    {
        return view('classes.show', compact('classRoom'));
    }

    public function edit(ClassRoom $classRoom)
    {
        $teachers = Teacher::all();
        return view('classes.edit', compact('classRoom', 'teachers'));
    }

    public function update(Request $request, ClassRoom $classRoom)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'capacity' => 'required|integer',
            'teacher_id' => 'required|exists:teachers,id',
        ]);

        $classRoom->update($validatedData); // Use ClassRoom here
        return redirect()->route('classes.index')->with('success', 'Class updated successfully.');
    }

    public function destroy(ClassRoom $classRoom)
    {
        $classRoom->delete();
        return redirect()->route('classes.index')->with('success', 'Class deleted successfully.');
    }
}
